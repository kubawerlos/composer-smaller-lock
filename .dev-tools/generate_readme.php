#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

$content = file_get_contents(__DIR__ . '/README.template.md');

$composerLockPath = __DIR__ . '/vendor/composer/composer/composer.lock';
$originalComposerLockContent = file_get_contents($composerLockPath);
$originalNumberOfLines = substr_count($originalComposerLockContent, "\n") + 1;

$eventProvider = new class() extends \PHPUnit\Framework\TestCase {
    public function getEvent()
    {
        $configSource = $this->createMock(Composer\Config\ConfigSourceInterface::class);
        $configSource->method('getName')->willReturn(__DIR__ . '/vendor/composer/composer/composer.lock');

        $config = $this->createMock(Composer\Config::class);
        $config->method('getConfigSource')->willReturn($configSource);

        $composer = $this->createMock(Composer\Composer::class);
        $composer->method('getConfig')->willReturn($config);

        $event = $this->createMock(Composer\Script\Event::class);
        $event->method('getComposer')->willReturn($composer);

        return $event;
    }
};

ComposerSmallerLock\Plugin::clean($eventProvider->getEvent());

$newComposerLockContent = file_get_contents($composerLockPath);
$newNumberOfLines = substr_count($newComposerLockContent, "\n") + 1;

file_put_contents($composerLockPath, $originalComposerLockContent);

$replacements = [
    '{COMPOSER_VERSION}' => getComposerVersion(),
    '{ORIGINAL_NUMBER_OF_LINES}' => $originalNumberOfLines,
    '{NEW_NUMBER_OF_LINES}' => $newNumberOfLines,
    '{COMPOSER_LOCK_DIFF}' => diff($originalComposerLockContent, $newComposerLockContent),
];

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
        $differ = new SebastianBergmann\Diff\Differ(new SebastianBergmann\Diff\Output\StrictUnifiedDiffOutputBuilder([
            'contextLines' => 1024,
            'fromFile' => '',
            'toFile' => '',
        ]));
    }

    $diff = $differ->diff($from, $to);

    /** @var int $start */
    $start = strpos($diff, "\n", 10);

    return substr($diff, $start + 1, -1);
}
