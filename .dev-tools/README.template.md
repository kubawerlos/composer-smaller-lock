# composer-smaller-lock

Composer plugin to keep composer.lock small and readable.

[![Latest stable version](https://img.shields.io/packagist/v/kubawerlos/composer-smaller-lock.svg?label=current%20version)](https://packagist.org/packages/kubawerlos/composer-smaller-lock)
[![PHP version](https://img.shields.io/packagist/php-v/kubawerlos/composer-smaller-lock.svg)](https://php.net)
[![CI status](https://github.com/kubawerlos/composer-smaller-lock/actions/workflows/ci.yaml/badge.svg)](https://github.com/kubawerlos/composer-smaller-lock/actions/workflows/ci.yaml)

Removes unnecessary keys and makes reviewing changes much easier.

[Composer](https://getcomposer.org) writes to the composer.lock a lot of information that it does not need, such as "autoload-dev", "require-dev" and "repositories".
This makes a process of reviewing changes in composer.lock much harder and increases the risk of overlooking important modifications like not wanted (for whatever reason) updates.

## Installation
```bash
composer require --dev kubawerlos/composer-smaller-lock
```

## Usage
None - this is a Composer's plugin, it will subscribe to Composer's events itself.

## Example
<details>
    <summary>Composer's <a href='https://github.com/composer/composer/blob/{COMPOSER_VERSION}/composer.lock'>composer.lock</a> has {ORIGINAL_NUMBER_OF_LINES} lines, with the plugin the number is reduced to {NEW_NUMBER_OF_LINES}.</summary>

```diff
{COMPOSER_LOCK_DIFF}
```
</details>
