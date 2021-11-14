<?php

/*
 * This file is part of composer-smaller-lock.
 *
 * (c) 2021 Kuba Werłos
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

/**
 * @internal
 *
 * @coversNothing
 */
final class IntegrationTest extends TestCase
{
    private const TEST_DIR = __DIR__ . '/_tmp/';

    public static function setUpBeforeClass(): void
    {
        self::tearDownAfterClass();
    }

    public static function tearDownAfterClass(): void
    {
        $filesystem = new Filesystem();
        $filesystem->remove(self::TEST_DIR);
    }

    /**
     * @dataProvider providePackageCases
     */
    public function testPackage(string $package): void
    {
        $directory = self::TEST_DIR . $package;

        $filesystem = new Filesystem();
        $filesystem->remove($directory);
        $filesystem->mkdir($directory);

        $repositories = ['type' => 'path', 'url' => __DIR__ . '/..', 'options' => ['symlink' => false]];
        $this->runCommand(\sprintf('composer require %s --no-interaction --no-update', $package), $directory);
        $this->runCommand(\sprintf('composer config repositories.self "%s"', \str_replace('"', '\\"', \json_encode($repositories, \JSON_UNESCAPED_SLASHES))), $directory);
        $this->runCommand('composer require kubawerlos/composer-smaller-lock:*@dev --ignore-platform-reqs --no-plugins', $directory);

        $originalDependencies = $this->runCommand('composer show', $directory);
        $originalLicenses = $this->runCommand('composer licenses', $directory);

        $this->runCommand('rm -fr ./vendor', $directory);
        $this->runCommand('composer install --ignore-platform-reqs', $directory);
        $afterRunningPluginDependencies = $this->runCommand('composer show', $directory);
        $afterRunningPluginLicenses = $this->runCommand('composer licenses', $directory);

        self::assertSame($originalDependencies, $afterRunningPluginDependencies);
        self::assertSame($originalLicenses, $afterRunningPluginLicenses);
    }

    public static function providePackageCases(): iterable
    {
        yield ['composer/composer'];
        yield ['composer/package-versions-deprecated'];
        yield ['doctrine/orm'];
        yield ['guzzlehttp/guzzle'];
        yield ['kubawerlos/php-cs-fixer-custom-fixers'];
        yield ['laravel/framework'];
        yield ['monolog/monolog'];
        yield ['nikic/php-parser'];
        yield ['phpunit/phpunit'];
        yield ['psr/log'];
        yield ['ramsey/uuid'];
        yield ['symfony/symfony'];
    }

    protected function runCommand(string $command, string $cwd): string
    {
        if (\method_exists(Process::class, 'fromShellCommandline')) {
            $process = Process::fromShellCommandline($command, $cwd);
        } else {
            $process = new Process($command, $cwd);
        }

        $exitCode = $process->run();

        if ($exitCode !== 0) {
            throw new \RuntimeException($process->getErrorOutput());
        }

        return $process->getOutput();
    }
}
