<?php declare(strict_types=1);

/*
 * This file is part of composer-smaller-lock.
 *
 * (c) 2021 Kuba Werłos
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests;

use Composer\Composer;
use Composer\Config;
use Composer\Config\ConfigSourceInterface;
use Composer\Console\Application;
use Composer\IO\IOInterface;
use Composer\Script\Event;
use ComposerSmallerLock\Plugin;
use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * @internal
 *
 * @covers \ComposerSmallerLock\Plugin
 */
final class PluginTest extends TestCase
{
    private $root;

    protected function setUp(): void
    {
        $this->root = vfsStream::setup('root');
    }

    public function testActivatingAndDeactivating(): void
    {
        $plugin = new Plugin();

        $application = new Application();
        $composer = $application->getComposer(true, true);
        $pluginManager = $composer->getPluginManager();

        self::assertEmpty($pluginManager->getPlugins());

        $pluginManager->addPlugin($plugin);
        self::assertCount(1, $pluginManager->getPlugins());
        self::assertContainsOnlyInstancesOf(Plugin::class, $pluginManager->getPlugins());

        if (\method_exists($plugin, 'removePlugin')) {
            $pluginManager->removePlugin($plugin);
            self::assertEmpty($pluginManager->getPlugins());

            $pluginManager->addPlugin($plugin);
            self::assertCount(1, $pluginManager->getPlugins());
            self::assertContainsOnlyInstancesOf(Plugin::class, $pluginManager->getPlugins());

            $pluginManager->uninstallPlugin($plugin);
        }
    }

    /**
     * @dataProvider providePluginInterfaceUsageDoesNotUsePluginManagerCases
     */
    public function testPluginInterfaceUsageDoesNotUsePluginManager(string $function): void
    {
        $plugin = new Plugin();

        $composer = $this->createMock(Composer::class);
        $composer->expects(self::never())->method('getPluginManager');

        $plugin->{$function}($composer, $this->createMock(IOInterface::class));
    }

    public static function providePluginInterfaceUsageDoesNotUsePluginManagerCases(): iterable
    {
        yield ['activate'];
        yield ['deactivate'];
        yield ['uninstall'];
    }

    /**
     * @dataProvider provideCleaningLockCases
     */
    public function testCleaningLock(string $fixture): void
    {
        \file_put_contents($this->root->url() . '/composer.json', '{}');
        \file_put_contents($this->root->url() . '/composer.lock', \file_get_contents(__DIR__ . "/fixtures/{$fixture}/composer.lock"));

        Plugin::clean($this->getEventMock());

        self::assertFileEquals(
            __DIR__ . "/fixtures/{$fixture}/expected.composer.lock",
            $this->root->url() . '/composer.lock'
        );
    }

    public static function provideCleaningLockCases(): iterable
    {
        /** @var SplFileInfo $directory */
        foreach (Finder::create()->directories()->in(__DIR__ . '/fixtures')->notName('_*') as $directory) {
            yield $directory->getBasename() => [$directory->getBasename()];
        }
    }

    public function testsPropertiesToKeepAreSorted(): void
    {
        $propertiesToKeep = (new \ReflectionClassConstant(Plugin::class, 'PROPERTIES_TO_KEEP'))->getValue();

        $sortedPropertiesToKeep = $propertiesToKeep;
        \sort($sortedPropertiesToKeep);

        self::assertSame($sortedPropertiesToKeep, $propertiesToKeep);
    }

    private function getEventMock(): Event
    {
        $configSource = $this->createMock(ConfigSourceInterface::class);
        $configSource->method('getName')->willReturn($this->root->url() . '/composer.lock');

        $config = $this->createMock(Config::class);
        $config->method('getConfigSource')->willReturn($configSource);

        $composer = $this->createMock(Composer::class);
        $composer->method('getConfig')->willReturn($config);

        $event = $this->createMock(Event::class);
        $event->method('getComposer')->willReturn($composer);

        return $event;
    }
}
