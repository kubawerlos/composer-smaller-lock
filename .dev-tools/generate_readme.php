#!/usr/bin/env php
<?php declare(strict_types=1);

/*
 * This file is part of composer-smaller-lock.
 *
 * (c) 2021 Kuba Werłos
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Composer\Config;
use Composer\Config\ConfigSourceInterface;
use Composer\Script\Event;
use ComposerSmallerLock\Plugin;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\Diff\Differ;
use SebastianBergmann\Diff\Output\StrictUnifiedDiffOutputBuilder;

$composerLockPath = __DIR__ . '/vendor/composer/composer/composer.lock';
$originalComposerLockContent = file_get_contents($composerLockPath);
$originalNumberOfLines = substr_count($originalComposerLockContent, "\n") + 1;

$eventProvider = new class ('name') extends TestCase {
    public function getEvent()
    {
        $configSource = $this->createMock(ConfigSourceInterface::class);
        $configSource->method('getName')->willReturn(__DIR__ . '/vendor/composer/composer/composer.lock');

        $config = $this->createMock(Config::class);
        $config->method('getConfigSource')->willReturn($configSource);

        $composer = $this->createMock(Composer\Composer::class);
        $composer->method('getConfig')->willReturn($config);

        $event = $this->createMock(Event::class);
        $event->method('getComposer')->willReturn($composer);

        return $event;
    }
};

Plugin::clean($eventProvider->getEvent());

$newComposerLockContent = file_get_contents($composerLockPath);
$newNumberOfLines = substr_count($newComposerLockContent, "\n") + 1;

file_put_contents($composerLockPath, $originalComposerLockContent);

$replacements = [
    '{COMPOSER_VERSION}' => getComposerVersion(),
    '{ORIGINAL_NUMBER_OF_LINES}' => $originalNumberOfLines,
    '{NEW_NUMBER_OF_LINES}' => $newNumberOfLines,
    '{COMPOSER_LOCK_DIFF}' => diff($originalComposerLockContent, $newComposerLockContent),
];

$content = file_get_contents(__DIR__ . '/README.template.md');
$content = str_replace(array_keys($replacements), array_values($replacements), $content);
file_put_contents(__DIR__ . '/../README.md', $content);

function getComposerVersion()
{
    $packages = json_decode(file_get_contents(__DIR__ . '/composer.lock'), true)['packages'];
    foreach ($packages as $package) {
        if ($package['name'] === 'composer/composer') {
            return $package['version'];
        }
    }
}

function diff(string $from, string $to): string
{
    static $differ;

    if ($differ === null) {
        $differ = new Differ(new StrictUnifiedDiffOutputBuilder([
            'contextLines' => 1024,
            'fromFile' => '',
            'toFile' => '',
        ]));
    }

    $diff = $differ->diff($from, $to);

    $start = strpos($diff, "\n", 10);
    assert(is_int($start));

    return substr($diff, $start + 1, -1);
}
