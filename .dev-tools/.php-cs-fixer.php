<?php declare(strict_types=1);

/*
 * This file is part of composer-smaller-lock.
 *
 * (c) 2021 Kuba Werłos
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

require_once __DIR__ . '/vendor/autoload.php';

use PhpCsFixer\Finder;
use PhpCsFixerConfig\Factory;

$config = Factory::createForLibrary('composer-smaller-lock', 'Kuba Werłos', 2021)
    ->setUsingCache(false)
    ->setFinder(
        Finder::create()
            ->files()
            ->in(__DIR__ . '/../src')
            ->in(__DIR__ . '/../tests')
            ->in(__DIR__)
            ->append([
                __FILE__,
            ]),
    );
$rules = $config->getRules();
$rules['php_unit_attributes'] = false; // @todo: remove when support for PHP 7.4 is dropped

return $config->setRules($rules);
