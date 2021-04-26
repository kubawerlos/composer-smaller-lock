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

$config = PhpCsFixerConfig\Factory::createForLibrary('composer-smaller-lock', 'Kuba Werłos', 2021)
    ->setUsingCache(false)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->files()
            ->in(__DIR__ . '/src')
            ->in(__DIR__ . '/tests')
            ->append([
                __DIR__ . '/.dev-tools/generate_readme.php',
                __FILE__,
            ])
    );

$rules = $config->getRules();
$rules['php_unit_internal_class'] = false;
$rules['php_unit_test_class_requires_covers'] = false;
$config->setRules($rules);

return $config;
