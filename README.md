# Composer smaller lock

Composer plugin to keep `composer.lock` file small and readable.

[![CI Status](https://github.com/kubawerlos/composer-smaller-lock/workflows/CI/badge.svg?branch=main&event=push)](https://github.com/kubawerlos/composer-smaller-lock/actions)

[Composer](https://getcomposer.org) writes to the `composer.lock` file a lot of information that it does not need, such as `autoload-dev`, `require-dev` or `repositories`.
This makes a process of reviewing changes in `composer.lock` file much harder and increases the risk of overlooking important modifications like not allowed (for whatever reason) version updates.
This plugin will keep `composer.lock` file small, thus more readable for reviewers.

## Installation
Composer smaller lock can be installed by running:
```bash
composer require --dev kubawerlos/composer-smaller-lock:dev-main
```

## Usage
None - this is a Composer's plugin, it will subscribe to Composer's events itself.
