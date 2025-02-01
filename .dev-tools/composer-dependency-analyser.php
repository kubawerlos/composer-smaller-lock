<?php declare(strict_types=1);

/*
 * This file is part of composer-smaller-lock.
 *
 * (c) 2021 Kuba Werłos
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use ShipMonk\ComposerDependencyAnalyser\Config\Configuration;
use ShipMonk\ComposerDependencyAnalyser\Config\ErrorType;

$config = new Configuration();

return $config
    ->addPathToScan(__DIR__ . '/../src', false)
    ->addPathToExclude(__DIR__ . '/../tests')
    ->ignoreErrorsOnPackage('composer/composer', [ErrorType::DEV_DEPENDENCY_IN_PROD]);
