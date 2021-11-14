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

namespace ComposerSmallerLock;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Json\JsonFile;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;

final class Plugin implements EventSubscriberInterface, PluginInterface
{
    private const PROPERTIES_TO_KEEP = [
        'autoload',
        'bin',
        'description',
        'dist',
        'extra',
        'license',
        'name',
        'provide',
        'replace',
        'require',
        'source',
        'target-dir',
        'type',
        'version',
    ];

    public function activate(Composer $composer, IOInterface $io): void
    {
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ScriptEvents::POST_UPDATE_CMD => 'clean',
        ];
    }

    public static function clean(Event $event): void
    {
        $composerLockPath = \substr($event->getComposer()->getConfig()->getConfigSource()->getName(), 0, -4) . 'lock';

        /** @var string $composerLockContent */
        $composerLockContent = \file_get_contents($composerLockPath);

        /** @var array<string, array<string, array<array<string>>>> $composerLockData */
        $composerLockData = \json_decode($composerLockContent, true);

        foreach (['packages', 'packages-dev'] as $section) {
            foreach (\array_keys($composerLockData[$section]) as $package) {
                $composerLockData[$section][$package] = self::cleanPackage($composerLockData[$section][$package]);
            }
        }

        \file_put_contents($composerLockPath, JsonFile::encode($composerLockData) . "\n");
    }

    /**
     * @param array<array<string>> $data
     *
     * @return array<array<string>>
     */
    private static function cleanPackage(array $data): array
    {
        if (isset($data['dist']['shasum']) && $data['dist']['shasum'] === '') {
            unset($data['dist']['shasum']);
        }

        return \array_filter(
            $data,
            static fn (string $key) => \in_array($key, self::PROPERTIES_TO_KEEP, true),
            \ARRAY_FILTER_USE_KEY
        );
    }
}
