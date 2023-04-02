# composer-smaller-lock

Composer plugin to keep composer.lock small and readable.

[![Latest stable version](https://img.shields.io/packagist/v/kubawerlos/composer-smaller-lock.svg?label=current%20version)](https://packagist.org/packages/kubawerlos/composer-smaller-lock)
[![PHP version](https://img.shields.io/packagist/php-v/kubawerlos/composer-smaller-lock.svg)](https://php.net)
[![CI Status](https://github.com/kubawerlos/composer-smaller-lock/workflows/CI/badge.svg?branch=main&event=push)](https://github.com/kubawerlos/composer-smaller-lock/actions)

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
    <summary>Composer's <a href='https://github.com/composer/composer/blob/2.5.5/composer.lock'>composer.lock</a> has 2419 lines, with the plugin the number is reduced to 1223.</summary>

```diff
 {
     "_readme": [
         "This file locks the dependencies of your project to a known state",
         "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
         "This file is @generated automatically"
     ],
     "content-hash": "c05209907d2737038b580f3345730346",
     "packages": [
         {
             "name": "composer/ca-bundle",
             "version": "1.3.5",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/ca-bundle.git",
                 "reference": "74780ccf8c19d6acb8d65c5f39cd72110e132bbd"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/ca-bundle/zipball/74780ccf8c19d6acb8d65c5f39cd72110e132bbd",
-                "reference": "74780ccf8c19d6acb8d65c5f39cd72110e132bbd",
-                "shasum": ""
+                "reference": "74780ccf8c19d6acb8d65c5f39cd72110e132bbd"
             },
             "require": {
                 "ext-openssl": "*",
                 "ext-pcre": "*",
                 "php": "^5.3.2 || ^7.0 || ^8.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^0.12.55",
-                "psr/log": "^1.0",
-                "symfony/phpunit-bridge": "^4.2 || ^5",
-                "symfony/process": "^2.5 || ^3.0 || ^4.0 || ^5.0 || ^6.0"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Composer\\CaBundle\\": "src"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Jordi Boggiano",
-                    "email": "j.boggiano@seld.be",
-                    "homepage": "http://seld.be"
-                }
-            ],
-            "description": "Lets you find a path to the system CA bundle, and includes a fallback to the Mozilla CA bundle.",
-            "keywords": [
-                "cabundle",
-                "cacert",
-                "certificate",
-                "ssl",
-                "tls"
-            ],
-            "support": {
-                "irc": "irc://irc.freenode.org/composer",
-                "issues": "https://github.com/composer/ca-bundle/issues",
-                "source": "https://github.com/composer/ca-bundle/tree/1.3.5"
-            },
-            "funding": [
-                {
-                    "url": "https://packagist.com",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/composer",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/composer/composer",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2023-01-11T08:27:00+00:00"
+            "description": "Lets you find a path to the system CA bundle, and includes a fallback to the Mozilla CA bundle."
         },
         {
             "name": "composer/class-map-generator",
             "version": "1.0.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/class-map-generator.git",
                 "reference": "1e1cb2b791facb2dfe32932a7718cf2571187513"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/class-map-generator/zipball/1e1cb2b791facb2dfe32932a7718cf2571187513",
-                "reference": "1e1cb2b791facb2dfe32932a7718cf2571187513",
-                "shasum": ""
+                "reference": "1e1cb2b791facb2dfe32932a7718cf2571187513"
             },
             "require": {
                 "composer/pcre": "^2 || ^3",
                 "php": "^7.2 || ^8.0",
                 "symfony/finder": "^4.4 || ^5.3 || ^6"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.6",
-                "phpstan/phpstan-deprecation-rules": "^1",
-                "phpstan/phpstan-phpunit": "^1",
-                "phpstan/phpstan-strict-rules": "^1.1",
-                "symfony/filesystem": "^5.4 || ^6",
-                "symfony/phpunit-bridge": "^5"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Composer\\ClassMapGenerator\\": "src"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Jordi Boggiano",
-                    "email": "j.boggiano@seld.be",
-                    "homepage": "https://seld.be"
-                }
-            ],
-            "description": "Utilities to scan PHP code and generate class maps.",
-            "keywords": [
-                "classmap"
-            ],
-            "support": {
-                "issues": "https://github.com/composer/class-map-generator/issues",
-                "source": "https://github.com/composer/class-map-generator/tree/1.0.0"
-            },
-            "funding": [
-                {
-                    "url": "https://packagist.com",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/composer",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/composer/composer",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-06-19T11:31:27+00:00"
+            "description": "Utilities to scan PHP code and generate class maps."
         },
         {
             "name": "composer/metadata-minifier",
             "version": "1.0.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/metadata-minifier.git",
                 "reference": "c549d23829536f0d0e984aaabbf02af91f443207"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/metadata-minifier/zipball/c549d23829536f0d0e984aaabbf02af91f443207",
-                "reference": "c549d23829536f0d0e984aaabbf02af91f443207",
-                "shasum": ""
+                "reference": "c549d23829536f0d0e984aaabbf02af91f443207"
             },
             "require": {
                 "php": "^5.3.2 || ^7.0 || ^8.0"
             },
-            "require-dev": {
-                "composer/composer": "^2",
-                "phpstan/phpstan": "^0.12.55",
-                "symfony/phpunit-bridge": "^4.2 || ^5"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Composer\\MetadataMinifier\\": "src"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Jordi Boggiano",
-                    "email": "j.boggiano@seld.be",
-                    "homepage": "http://seld.be"
-                }
-            ],
-            "description": "Small utility library that handles metadata minification and expansion.",
-            "keywords": [
-                "composer",
-                "compression"
-            ],
-            "support": {
-                "issues": "https://github.com/composer/metadata-minifier/issues",
-                "source": "https://github.com/composer/metadata-minifier/tree/1.0.0"
-            },
-            "funding": [
-                {
-                    "url": "https://packagist.com",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/composer",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/composer/composer",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2021-04-07T13:37:33+00:00"
+            "description": "Small utility library that handles metadata minification and expansion."
         },
         {
             "name": "composer/pcre",
             "version": "2.1.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/pcre.git",
                 "reference": "3fdb2807b31a78a40ad89570e30ec77466c98717"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/pcre/zipball/3fdb2807b31a78a40ad89570e30ec77466c98717",
-                "reference": "3fdb2807b31a78a40ad89570e30ec77466c98717",
-                "shasum": ""
+                "reference": "3fdb2807b31a78a40ad89570e30ec77466c98717"
             },
             "require": {
                 "php": "^7.2 || ^8.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.3",
-                "phpstan/phpstan-strict-rules": "^1.1",
-                "symfony/phpunit-bridge": "^5"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "2.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Composer\\Pcre\\": "src"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Jordi Boggiano",
-                    "email": "j.boggiano@seld.be",
-                    "homepage": "http://seld.be"
-                }
-            ],
-            "description": "PCRE wrapping library that offers type-safe preg_* replacements.",
-            "keywords": [
-                "PCRE",
-                "preg",
-                "regex",
-                "regular expression"
-            ],
-            "support": {
-                "issues": "https://github.com/composer/pcre/issues",
-                "source": "https://github.com/composer/pcre/tree/2.1.0"
-            },
-            "funding": [
-                {
-                    "url": "https://packagist.com",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/composer",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/composer/composer",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-11-16T18:32:04+00:00"
+            "description": "PCRE wrapping library that offers type-safe preg_* replacements."
         },
         {
             "name": "composer/semver",
             "version": "3.3.2",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/semver.git",
                 "reference": "3953f23262f2bff1919fc82183ad9acb13ff62c9"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/semver/zipball/3953f23262f2bff1919fc82183ad9acb13ff62c9",
-                "reference": "3953f23262f2bff1919fc82183ad9acb13ff62c9",
-                "shasum": ""
+                "reference": "3953f23262f2bff1919fc82183ad9acb13ff62c9"
             },
             "require": {
                 "php": "^5.3.2 || ^7.0 || ^8.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.4",
-                "symfony/phpunit-bridge": "^4.2 || ^5"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "3.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Composer\\Semver\\": "src"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nils Adermann",
-                    "email": "naderman@naderman.de",
-                    "homepage": "http://www.naderman.de"
-                },
-                {
-                    "name": "Jordi Boggiano",
-                    "email": "j.boggiano@seld.be",
-                    "homepage": "http://seld.be"
-                },
-                {
-                    "name": "Rob Bast",
-                    "email": "rob.bast@gmail.com",
-                    "homepage": "http://robbast.nl"
-                }
-            ],
-            "description": "Semver library that offers utilities, version constraint parsing and validation.",
-            "keywords": [
-                "semantic",
-                "semver",
-                "validation",
-                "versioning"
-            ],
-            "support": {
-                "irc": "irc://irc.freenode.org/composer",
-                "issues": "https://github.com/composer/semver/issues",
-                "source": "https://github.com/composer/semver/tree/3.3.2"
-            },
-            "funding": [
-                {
-                    "url": "https://packagist.com",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/composer",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/composer/composer",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-04-01T19:23:25+00:00"
+            "description": "Semver library that offers utilities, version constraint parsing and validation."
         },
         {
             "name": "composer/spdx-licenses",
             "version": "1.5.7",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/spdx-licenses.git",
                 "reference": "c848241796da2abf65837d51dce1fae55a960149"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/spdx-licenses/zipball/c848241796da2abf65837d51dce1fae55a960149",
-                "reference": "c848241796da2abf65837d51dce1fae55a960149",
-                "shasum": ""
+                "reference": "c848241796da2abf65837d51dce1fae55a960149"
             },
             "require": {
                 "php": "^5.3.2 || ^7.0 || ^8.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^0.12.55",
-                "symfony/phpunit-bridge": "^4.2 || ^5"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Composer\\Spdx\\": "src"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nils Adermann",
-                    "email": "naderman@naderman.de",
-                    "homepage": "http://www.naderman.de"
-                },
-                {
-                    "name": "Jordi Boggiano",
-                    "email": "j.boggiano@seld.be",
-                    "homepage": "http://seld.be"
-                },
-                {
-                    "name": "Rob Bast",
-                    "email": "rob.bast@gmail.com",
-                    "homepage": "http://robbast.nl"
-                }
-            ],
-            "description": "SPDX licenses list and validation library.",
-            "keywords": [
-                "license",
-                "spdx",
-                "validator"
-            ],
-            "support": {
-                "irc": "irc://irc.freenode.org/composer",
-                "issues": "https://github.com/composer/spdx-licenses/issues",
-                "source": "https://github.com/composer/spdx-licenses/tree/1.5.7"
-            },
-            "funding": [
-                {
-                    "url": "https://packagist.com",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/composer",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/composer/composer",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-05-23T07:37:50+00:00"
+            "description": "SPDX licenses list and validation library."
         },
         {
             "name": "composer/xdebug-handler",
             "version": "3.0.3",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/xdebug-handler.git",
                 "reference": "ced299686f41dce890debac69273b47ffe98a40c"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/xdebug-handler/zipball/ced299686f41dce890debac69273b47ffe98a40c",
-                "reference": "ced299686f41dce890debac69273b47ffe98a40c",
-                "shasum": ""
+                "reference": "ced299686f41dce890debac69273b47ffe98a40c"
             },
             "require": {
                 "composer/pcre": "^1 || ^2 || ^3",
                 "php": "^7.2.5 || ^8.0",
                 "psr/log": "^1 || ^2 || ^3"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.0",
-                "phpstan/phpstan-strict-rules": "^1.1",
-                "symfony/phpunit-bridge": "^6.0"
-            },
             "type": "library",
             "autoload": {
                 "psr-4": {
                     "Composer\\XdebugHandler\\": "src"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "John Stevenson",
-                    "email": "john-stevenson@blueyonder.co.uk"
-                }
-            ],
-            "description": "Restarts a process without Xdebug.",
-            "keywords": [
-                "Xdebug",
-                "performance"
-            ],
-            "support": {
-                "irc": "irc://irc.freenode.org/composer",
-                "issues": "https://github.com/composer/xdebug-handler/issues",
-                "source": "https://github.com/composer/xdebug-handler/tree/3.0.3"
-            },
-            "funding": [
-                {
-                    "url": "https://packagist.com",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/composer",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/composer/composer",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-02-25T21:32:43+00:00"
+            "description": "Restarts a process without Xdebug."
         },
         {
             "name": "justinrainbow/json-schema",
             "version": "5.2.12",
             "source": {
                 "type": "git",
                 "url": "https://github.com/justinrainbow/json-schema.git",
                 "reference": "ad87d5a5ca981228e0e205c2bc7dfb8e24559b60"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/justinrainbow/json-schema/zipball/ad87d5a5ca981228e0e205c2bc7dfb8e24559b60",
-                "reference": "ad87d5a5ca981228e0e205c2bc7dfb8e24559b60",
-                "shasum": ""
+                "reference": "ad87d5a5ca981228e0e205c2bc7dfb8e24559b60"
             },
             "require": {
                 "php": ">=5.3.3"
             },
-            "require-dev": {
-                "friendsofphp/php-cs-fixer": "~2.2.20||~2.15.1",
-                "json-schema/json-schema-test-suite": "1.2.0",
-                "phpunit/phpunit": "^4.8.35"
-            },
             "bin": [
                 "bin/validate-json"
             ],
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-master": "5.0.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "JsonSchema\\": "src/JsonSchema/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Bruno Prieto Reis",
-                    "email": "bruno.p.reis@gmail.com"
-                },
-                {
-                    "name": "Justin Rainbow",
-                    "email": "justin.rainbow@gmail.com"
-                },
-                {
-                    "name": "Igor Wiedler",
-                    "email": "igor@wiedler.ch"
-                },
-                {
-                    "name": "Robert Schönthal",
-                    "email": "seroscho@googlemail.com"
-                }
-            ],
-            "description": "A library to validate a json schema.",
-            "homepage": "https://github.com/justinrainbow/json-schema",
-            "keywords": [
-                "json",
-                "schema"
-            ],
-            "support": {
-                "issues": "https://github.com/justinrainbow/json-schema/issues",
-                "source": "https://github.com/justinrainbow/json-schema/tree/5.2.12"
-            },
-            "time": "2022-04-13T08:02:27+00:00"
+            "description": "A library to validate a json schema."
         },
         {
             "name": "psr/container",
             "version": "1.1.1",
             "source": {
                 "type": "git",
                 "url": "https://github.com/php-fig/container.git",
                 "reference": "8622567409010282b7aeebe4bb841fe98b58dcaf"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/php-fig/container/zipball/8622567409010282b7aeebe4bb841fe98b58dcaf",
-                "reference": "8622567409010282b7aeebe4bb841fe98b58dcaf",
-                "shasum": ""
+                "reference": "8622567409010282b7aeebe4bb841fe98b58dcaf"
             },
             "require": {
                 "php": ">=7.2.0"
             },
             "type": "library",
             "autoload": {
                 "psr-4": {
                     "Psr\\Container\\": "src/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "PHP-FIG",
-                    "homepage": "https://www.php-fig.org/"
-                }
-            ],
-            "description": "Common Container Interface (PHP FIG PSR-11)",
-            "homepage": "https://github.com/php-fig/container",
-            "keywords": [
-                "PSR-11",
-                "container",
-                "container-interface",
-                "container-interop",
-                "psr"
-            ],
-            "support": {
-                "issues": "https://github.com/php-fig/container/issues",
-                "source": "https://github.com/php-fig/container/tree/1.1.1"
-            },
-            "time": "2021-03-05T17:36:06+00:00"
+            "description": "Common Container Interface (PHP FIG PSR-11)"
         },
         {
             "name": "psr/log",
             "version": "1.1.4",
             "source": {
                 "type": "git",
                 "url": "https://github.com/php-fig/log.git",
                 "reference": "d49695b909c3b7628b6289db5479a1c204601f11"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/php-fig/log/zipball/d49695b909c3b7628b6289db5479a1c204601f11",
-                "reference": "d49695b909c3b7628b6289db5479a1c204601f11",
-                "shasum": ""
+                "reference": "d49695b909c3b7628b6289db5479a1c204601f11"
             },
             "require": {
                 "php": ">=5.3.0"
             },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-master": "1.1.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Psr\\Log\\": "Psr/Log/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "PHP-FIG",
-                    "homepage": "https://www.php-fig.org/"
-                }
-            ],
-            "description": "Common interface for logging libraries",
-            "homepage": "https://github.com/php-fig/log",
-            "keywords": [
-                "log",
-                "psr",
-                "psr-3"
-            ],
-            "support": {
-                "source": "https://github.com/php-fig/log/tree/1.1.4"
-            },
-            "time": "2021-05-03T11:20:27+00:00"
+            "description": "Common interface for logging libraries"
         },
         {
             "name": "react/promise",
             "version": "v2.9.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/reactphp/promise.git",
                 "reference": "234f8fd1023c9158e2314fa9d7d0e6a83db42910"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/reactphp/promise/zipball/234f8fd1023c9158e2314fa9d7d0e6a83db42910",
-                "reference": "234f8fd1023c9158e2314fa9d7d0e6a83db42910",
-                "shasum": ""
+                "reference": "234f8fd1023c9158e2314fa9d7d0e6a83db42910"
             },
             "require": {
                 "php": ">=5.4.0"
             },
-            "require-dev": {
-                "phpunit/phpunit": "^9.3 || ^5.7 || ^4.8.36"
-            },
             "type": "library",
             "autoload": {
                 "files": [
                     "src/functions_include.php"
                 ],
                 "psr-4": {
                     "React\\Promise\\": "src/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Jan Sorgalla",
-                    "email": "jsorgalla@gmail.com",
-                    "homepage": "https://sorgalla.com/"
-                },
-                {
-                    "name": "Christian Lück",
-                    "email": "christian@clue.engineering",
-                    "homepage": "https://clue.engineering/"
-                },
-                {
-                    "name": "Cees-Jan Kiewiet",
-                    "email": "reactphp@ceesjankiewiet.nl",
-                    "homepage": "https://wyrihaximus.net/"
-                },
-                {
-                    "name": "Chris Boden",
-                    "email": "cboden@gmail.com",
-                    "homepage": "https://cboden.dev/"
-                }
-            ],
-            "description": "A lightweight implementation of CommonJS Promises/A for PHP",
-            "keywords": [
-                "promise",
-                "promises"
-            ],
-            "support": {
-                "issues": "https://github.com/reactphp/promise/issues",
-                "source": "https://github.com/reactphp/promise/tree/v2.9.0"
-            },
-            "funding": [
-                {
-                    "url": "https://github.com/WyriHaximus",
-                    "type": "github"
-                },
-                {
-                    "url": "https://github.com/clue",
-                    "type": "github"
-                }
-            ],
-            "time": "2022-02-11T10:27:51+00:00"
+            "description": "A lightweight implementation of CommonJS Promises/A for PHP"
         },
         {
             "name": "seld/jsonlint",
             "version": "1.9.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/Seldaek/jsonlint.git",
                 "reference": "4211420d25eba80712bff236a98960ef68b866b7"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/Seldaek/jsonlint/zipball/4211420d25eba80712bff236a98960ef68b866b7",
-                "reference": "4211420d25eba80712bff236a98960ef68b866b7",
-                "shasum": ""
+                "reference": "4211420d25eba80712bff236a98960ef68b866b7"
             },
             "require": {
                 "php": "^5.3 || ^7.0 || ^8.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.5",
-                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.0 || ^8.5.13"
-            },
             "bin": [
                 "bin/jsonlint"
             ],
             "type": "library",
             "autoload": {
                 "psr-4": {
                     "Seld\\JsonLint\\": "src/Seld/JsonLint/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Jordi Boggiano",
-                    "email": "j.boggiano@seld.be",
-                    "homepage": "http://seld.be"
-                }
-            ],
-            "description": "JSON Linter",
-            "keywords": [
-                "json",
-                "linter",
-                "parser",
-                "validator"
-            ],
-            "support": {
-                "issues": "https://github.com/Seldaek/jsonlint/issues",
-                "source": "https://github.com/Seldaek/jsonlint/tree/1.9.0"
-            },
-            "funding": [
-                {
-                    "url": "https://github.com/Seldaek",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/seld/jsonlint",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-04-01T13:37:23+00:00"
+            "description": "JSON Linter"
         },
         {
             "name": "seld/phar-utils",
             "version": "1.2.1",
             "source": {
                 "type": "git",
                 "url": "https://github.com/Seldaek/phar-utils.git",
                 "reference": "ea2f4014f163c1be4c601b9b7bd6af81ba8d701c"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/Seldaek/phar-utils/zipball/ea2f4014f163c1be4c601b9b7bd6af81ba8d701c",
-                "reference": "ea2f4014f163c1be4c601b9b7bd6af81ba8d701c",
-                "shasum": ""
+                "reference": "ea2f4014f163c1be4c601b9b7bd6af81ba8d701c"
             },
             "require": {
                 "php": ">=5.3"
             },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-master": "1.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Seld\\PharUtils\\": "src/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Jordi Boggiano",
-                    "email": "j.boggiano@seld.be"
-                }
-            ],
-            "description": "PHAR file format utilities, for when PHP phars you up",
-            "keywords": [
-                "phar"
-            ],
-            "support": {
-                "issues": "https://github.com/Seldaek/phar-utils/issues",
-                "source": "https://github.com/Seldaek/phar-utils/tree/1.2.1"
-            },
-            "time": "2022-08-31T10:31:18+00:00"
+            "description": "PHAR file format utilities, for when PHP phars you up"
         },
         {
             "name": "seld/signal-handler",
             "version": "2.0.1",
             "source": {
                 "type": "git",
                 "url": "https://github.com/Seldaek/signal-handler.git",
                 "reference": "f69d119511dc0360440cdbdaa71829c149b7be75"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/Seldaek/signal-handler/zipball/f69d119511dc0360440cdbdaa71829c149b7be75",
-                "reference": "f69d119511dc0360440cdbdaa71829c149b7be75",
-                "shasum": ""
+                "reference": "f69d119511dc0360440cdbdaa71829c149b7be75"
             },
             "require": {
                 "php": ">=7.2.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1",
-                "phpstan/phpstan-deprecation-rules": "^1.0",
-                "phpstan/phpstan-phpunit": "^1",
-                "phpstan/phpstan-strict-rules": "^1.3",
-                "phpunit/phpunit": "^7.5.20 || ^8.5.23",
-                "psr/log": "^1 || ^2 || ^3"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "2.x-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Seld\\Signal\\": "src/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Jordi Boggiano",
-                    "email": "j.boggiano@seld.be",
-                    "homepage": "http://seld.be"
-                }
-            ],
-            "description": "Simple unix signal handler that silently fails where signals are not supported for easy cross-platform development",
-            "keywords": [
-                "posix",
-                "sigint",
-                "signal",
-                "sigterm",
-                "unix"
-            ],
-            "support": {
-                "issues": "https://github.com/Seldaek/signal-handler/issues",
-                "source": "https://github.com/Seldaek/signal-handler/tree/2.0.1"
-            },
-            "time": "2022-07-20T18:31:45+00:00"
+            "description": "Simple unix signal handler that silently fails where signals are not supported for easy cross-platform development"
         },
         {
             "name": "symfony/console",
             "version": "v5.4.21",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/console.git",
                 "reference": "c77433ddc6cdc689caf48065d9ea22ca0853fbd9"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/console/zipball/c77433ddc6cdc689caf48065d9ea22ca0853fbd9",
-                "reference": "c77433ddc6cdc689caf48065d9ea22ca0853fbd9",
-                "shasum": ""
+                "reference": "c77433ddc6cdc689caf48065d9ea22ca0853fbd9"
             },
             "require": {
                 "php": ">=7.2.5",
                 "symfony/deprecation-contracts": "^2.1|^3",
                 "symfony/polyfill-mbstring": "~1.0",
                 "symfony/polyfill-php73": "^1.9",
                 "symfony/polyfill-php80": "^1.16",
                 "symfony/service-contracts": "^1.1|^2|^3",
                 "symfony/string": "^5.1|^6.0"
             },
-            "conflict": {
-                "psr/log": ">=3",
-                "symfony/dependency-injection": "<4.4",
-                "symfony/dotenv": "<5.1",
-                "symfony/event-dispatcher": "<4.4",
-                "symfony/lock": "<4.4",
-                "symfony/process": "<4.4"
-            },
             "provide": {
                 "psr/log-implementation": "1.0|2.0"
             },
-            "require-dev": {
-                "psr/log": "^1|^2",
-                "symfony/config": "^4.4|^5.0|^6.0",
-                "symfony/dependency-injection": "^4.4|^5.0|^6.0",
-                "symfony/event-dispatcher": "^4.4|^5.0|^6.0",
-                "symfony/lock": "^4.4|^5.0|^6.0",
-                "symfony/process": "^4.4|^5.0|^6.0",
-                "symfony/var-dumper": "^4.4|^5.0|^6.0"
-            },
-            "suggest": {
-                "psr/log": "For using the console logger",
-                "symfony/event-dispatcher": "",
-                "symfony/lock": "",
-                "symfony/process": ""
-            },
             "type": "library",
             "autoload": {
                 "psr-4": {
                     "Symfony\\Component\\Console\\": ""
                 },
                 "exclude-from-classmap": [
                     "/Tests/"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Fabien Potencier",
-                    "email": "fabien@symfony.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Eases the creation of beautiful and testable command line interfaces",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "cli",
-                "command line",
-                "console",
-                "terminal"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/console/tree/v5.4.21"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2023-02-25T16:59:41+00:00"
+            "description": "Eases the creation of beautiful and testable command line interfaces"
         },
         {
             "name": "symfony/deprecation-contracts",
             "version": "v2.5.2",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/deprecation-contracts.git",
                 "reference": "e8b495ea28c1d97b5e0c121748d6f9b53d075c66"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/deprecation-contracts/zipball/e8b495ea28c1d97b5e0c121748d6f9b53d075c66",
-                "reference": "e8b495ea28c1d97b5e0c121748d6f9b53d075c66",
-                "shasum": ""
+                "reference": "e8b495ea28c1d97b5e0c121748d6f9b53d075c66"
             },
             "require": {
                 "php": ">=7.1"
             },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "2.5-dev"
                 },
                 "thanks": {
                     "name": "symfony/contracts",
                     "url": "https://github.com/symfony/contracts"
                 }
             },
             "autoload": {
                 "files": [
                     "function.php"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "A generic function and convention to trigger deprecation notices",
-            "homepage": "https://symfony.com",
-            "support": {
-                "source": "https://github.com/symfony/deprecation-contracts/tree/v2.5.2"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-01-02T09:53:40+00:00"
+            "description": "A generic function and convention to trigger deprecation notices"
         },
         {
             "name": "symfony/filesystem",
             "version": "v5.4.21",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/filesystem.git",
                 "reference": "e75960b1bbfd2b8c9e483e0d74811d555ca3de9f"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/filesystem/zipball/e75960b1bbfd2b8c9e483e0d74811d555ca3de9f",
-                "reference": "e75960b1bbfd2b8c9e483e0d74811d555ca3de9f",
-                "shasum": ""
+                "reference": "e75960b1bbfd2b8c9e483e0d74811d555ca3de9f"
             },
             "require": {
                 "php": ">=7.2.5",
                 "symfony/polyfill-ctype": "~1.8",
                 "symfony/polyfill-mbstring": "~1.8",
                 "symfony/polyfill-php80": "^1.16"
             },
             "type": "library",
             "autoload": {
                 "psr-4": {
                     "Symfony\\Component\\Filesystem\\": ""
                 },
                 "exclude-from-classmap": [
                     "/Tests/"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Fabien Potencier",
-                    "email": "fabien@symfony.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Provides basic utilities for the filesystem",
-            "homepage": "https://symfony.com",
-            "support": {
-                "source": "https://github.com/symfony/filesystem/tree/v5.4.21"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2023-02-14T08:03:56+00:00"
+            "description": "Provides basic utilities for the filesystem"
         },
         {
             "name": "symfony/finder",
             "version": "v5.4.21",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/finder.git",
                 "reference": "078e9a5e1871fcfe6a5ce421b539344c21afef19"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/finder/zipball/078e9a5e1871fcfe6a5ce421b539344c21afef19",
-                "reference": "078e9a5e1871fcfe6a5ce421b539344c21afef19",
-                "shasum": ""
+                "reference": "078e9a5e1871fcfe6a5ce421b539344c21afef19"
             },
             "require": {
                 "php": ">=7.2.5",
                 "symfony/deprecation-contracts": "^2.1|^3",
                 "symfony/polyfill-php80": "^1.16"
             },
             "type": "library",
             "autoload": {
                 "psr-4": {
                     "Symfony\\Component\\Finder\\": ""
                 },
                 "exclude-from-classmap": [
                     "/Tests/"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Fabien Potencier",
-                    "email": "fabien@symfony.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Finds files and directories via an intuitive fluent interface",
-            "homepage": "https://symfony.com",
-            "support": {
-                "source": "https://github.com/symfony/finder/tree/v5.4.21"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2023-02-16T09:33:00+00:00"
+            "description": "Finds files and directories via an intuitive fluent interface"
         },
         {
             "name": "symfony/polyfill-ctype",
             "version": "v1.27.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-ctype.git",
                 "reference": "5bbc823adecdae860bb64756d639ecfec17b050a"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-ctype/zipball/5bbc823adecdae860bb64756d639ecfec17b050a",
-                "reference": "5bbc823adecdae860bb64756d639ecfec17b050a",
-                "shasum": ""
+                "reference": "5bbc823adecdae860bb64756d639ecfec17b050a"
             },
             "require": {
                 "php": ">=7.1"
             },
             "provide": {
                 "ext-ctype": "*"
             },
-            "suggest": {
-                "ext-ctype": "For best performance"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.27-dev"
                 },
                 "thanks": {
                     "name": "symfony/polyfill",
                     "url": "https://github.com/symfony/polyfill"
                 }
             },
             "autoload": {
                 "files": [
                     "bootstrap.php"
                 ],
                 "psr-4": {
                     "Symfony\\Polyfill\\Ctype\\": ""
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Gert de Pagter",
-                    "email": "BackEndTea@gmail.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Symfony polyfill for ctype functions",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "compatibility",
-                "ctype",
-                "polyfill",
-                "portable"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/polyfill-ctype/tree/v1.27.0"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-11-03T14:55:06+00:00"
+            "description": "Symfony polyfill for ctype functions"
         },
         {
             "name": "symfony/polyfill-intl-grapheme",
             "version": "v1.27.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-intl-grapheme.git",
                 "reference": "511a08c03c1960e08a883f4cffcacd219b758354"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-intl-grapheme/zipball/511a08c03c1960e08a883f4cffcacd219b758354",
-                "reference": "511a08c03c1960e08a883f4cffcacd219b758354",
-                "shasum": ""
+                "reference": "511a08c03c1960e08a883f4cffcacd219b758354"
             },
             "require": {
                 "php": ">=7.1"
             },
-            "suggest": {
-                "ext-intl": "For best performance"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.27-dev"
                 },
                 "thanks": {
                     "name": "symfony/polyfill",
                     "url": "https://github.com/symfony/polyfill"
                 }
             },
             "autoload": {
                 "files": [
                     "bootstrap.php"
                 ],
                 "psr-4": {
                     "Symfony\\Polyfill\\Intl\\Grapheme\\": ""
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Symfony polyfill for intl's grapheme_* functions",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "compatibility",
-                "grapheme",
-                "intl",
-                "polyfill",
-                "portable",
-                "shim"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/polyfill-intl-grapheme/tree/v1.27.0"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-11-03T14:55:06+00:00"
+            "description": "Symfony polyfill for intl's grapheme_* functions"
         },
         {
             "name": "symfony/polyfill-intl-normalizer",
             "version": "v1.27.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-intl-normalizer.git",
                 "reference": "19bd1e4fcd5b91116f14d8533c57831ed00571b6"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-intl-normalizer/zipball/19bd1e4fcd5b91116f14d8533c57831ed00571b6",
-                "reference": "19bd1e4fcd5b91116f14d8533c57831ed00571b6",
-                "shasum": ""
+                "reference": "19bd1e4fcd5b91116f14d8533c57831ed00571b6"
             },
             "require": {
                 "php": ">=7.1"
             },
-            "suggest": {
-                "ext-intl": "For best performance"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.27-dev"
                 },
                 "thanks": {
                     "name": "symfony/polyfill",
                     "url": "https://github.com/symfony/polyfill"
                 }
             },
             "autoload": {
                 "files": [
                     "bootstrap.php"
                 ],
                 "psr-4": {
                     "Symfony\\Polyfill\\Intl\\Normalizer\\": ""
                 },
                 "classmap": [
                     "Resources/stubs"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Symfony polyfill for intl's Normalizer class and related functions",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "compatibility",
-                "intl",
-                "normalizer",
-                "polyfill",
-                "portable",
-                "shim"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/polyfill-intl-normalizer/tree/v1.27.0"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-11-03T14:55:06+00:00"
+            "description": "Symfony polyfill for intl's Normalizer class and related functions"
         },
         {
             "name": "symfony/polyfill-mbstring",
             "version": "v1.27.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-mbstring.git",
                 "reference": "8ad114f6b39e2c98a8b0e3bd907732c207c2b534"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-mbstring/zipball/8ad114f6b39e2c98a8b0e3bd907732c207c2b534",
-                "reference": "8ad114f6b39e2c98a8b0e3bd907732c207c2b534",
-                "shasum": ""
+                "reference": "8ad114f6b39e2c98a8b0e3bd907732c207c2b534"
             },
             "require": {
                 "php": ">=7.1"
             },
             "provide": {
                 "ext-mbstring": "*"
             },
-            "suggest": {
-                "ext-mbstring": "For best performance"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.27-dev"
                 },
                 "thanks": {
                     "name": "symfony/polyfill",
                     "url": "https://github.com/symfony/polyfill"
                 }
             },
             "autoload": {
                 "files": [
                     "bootstrap.php"
                 ],
                 "psr-4": {
                     "Symfony\\Polyfill\\Mbstring\\": ""
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Symfony polyfill for the Mbstring extension",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "compatibility",
-                "mbstring",
-                "polyfill",
-                "portable",
-                "shim"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/polyfill-mbstring/tree/v1.27.0"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-11-03T14:55:06+00:00"
+            "description": "Symfony polyfill for the Mbstring extension"
         },
         {
             "name": "symfony/polyfill-php73",
             "version": "v1.27.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-php73.git",
                 "reference": "9e8ecb5f92152187c4799efd3c96b78ccab18ff9"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-php73/zipball/9e8ecb5f92152187c4799efd3c96b78ccab18ff9",
-                "reference": "9e8ecb5f92152187c4799efd3c96b78ccab18ff9",
-                "shasum": ""
+                "reference": "9e8ecb5f92152187c4799efd3c96b78ccab18ff9"
             },
             "require": {
                 "php": ">=7.1"
             },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.27-dev"
                 },
                 "thanks": {
                     "name": "symfony/polyfill",
                     "url": "https://github.com/symfony/polyfill"
                 }
             },
             "autoload": {
                 "files": [
                     "bootstrap.php"
                 ],
                 "psr-4": {
                     "Symfony\\Polyfill\\Php73\\": ""
                 },
                 "classmap": [
                     "Resources/stubs"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "compatibility",
-                "polyfill",
-                "portable",
-                "shim"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/polyfill-php73/tree/v1.27.0"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-11-03T14:55:06+00:00"
+            "description": "Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions"
         },
         {
             "name": "symfony/polyfill-php80",
             "version": "v1.27.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-php80.git",
                 "reference": "7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-php80/zipball/7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936",
-                "reference": "7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936",
-                "shasum": ""
+                "reference": "7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936"
             },
             "require": {
                 "php": ">=7.1"
             },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.27-dev"
                 },
                 "thanks": {
                     "name": "symfony/polyfill",
                     "url": "https://github.com/symfony/polyfill"
                 }
             },
             "autoload": {
                 "files": [
                     "bootstrap.php"
                 ],
                 "psr-4": {
                     "Symfony\\Polyfill\\Php80\\": ""
                 },
                 "classmap": [
                     "Resources/stubs"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Ion Bazan",
-                    "email": "ion.bazan@gmail.com"
-                },
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "compatibility",
-                "polyfill",
-                "portable",
-                "shim"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/polyfill-php80/tree/v1.27.0"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-11-03T14:55:06+00:00"
+            "description": "Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions"
         },
         {
             "name": "symfony/polyfill-php81",
             "version": "v1.27.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-php81.git",
                 "reference": "707403074c8ea6e2edaf8794b0157a0bfa52157a"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-php81/zipball/707403074c8ea6e2edaf8794b0157a0bfa52157a",
-                "reference": "707403074c8ea6e2edaf8794b0157a0bfa52157a",
-                "shasum": ""
+                "reference": "707403074c8ea6e2edaf8794b0157a0bfa52157a"
             },
             "require": {
                 "php": ">=7.1"
             },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.27-dev"
                 },
                 "thanks": {
                     "name": "symfony/polyfill",
                     "url": "https://github.com/symfony/polyfill"
                 }
             },
             "autoload": {
                 "files": [
                     "bootstrap.php"
                 ],
                 "psr-4": {
                     "Symfony\\Polyfill\\Php81\\": ""
                 },
                 "classmap": [
                     "Resources/stubs"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Symfony polyfill backporting some PHP 8.1+ features to lower PHP versions",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "compatibility",
-                "polyfill",
-                "portable",
-                "shim"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/polyfill-php81/tree/v1.27.0"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-11-03T14:55:06+00:00"
+            "description": "Symfony polyfill backporting some PHP 8.1+ features to lower PHP versions"
         },
         {
             "name": "symfony/process",
             "version": "v5.4.21",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/process.git",
                 "reference": "d4ce417ebcb0b7d090b4c178ed6d3accc518e8bd"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/process/zipball/d4ce417ebcb0b7d090b4c178ed6d3accc518e8bd",
-                "reference": "d4ce417ebcb0b7d090b4c178ed6d3accc518e8bd",
-                "shasum": ""
+                "reference": "d4ce417ebcb0b7d090b4c178ed6d3accc518e8bd"
             },
             "require": {
                 "php": ">=7.2.5",
                 "symfony/polyfill-php80": "^1.16"
             },
             "type": "library",
             "autoload": {
                 "psr-4": {
                     "Symfony\\Component\\Process\\": ""
                 },
                 "exclude-from-classmap": [
                     "/Tests/"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Fabien Potencier",
-                    "email": "fabien@symfony.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Executes commands in sub-processes",
-            "homepage": "https://symfony.com",
-            "support": {
-                "source": "https://github.com/symfony/process/tree/v5.4.21"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2023-02-21T19:46:44+00:00"
+            "description": "Executes commands in sub-processes"
         },
         {
             "name": "symfony/service-contracts",
             "version": "v2.5.2",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/service-contracts.git",
                 "reference": "4b426aac47d6427cc1a1d0f7e2ac724627f5966c"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/service-contracts/zipball/4b426aac47d6427cc1a1d0f7e2ac724627f5966c",
-                "reference": "4b426aac47d6427cc1a1d0f7e2ac724627f5966c",
-                "shasum": ""
+                "reference": "4b426aac47d6427cc1a1d0f7e2ac724627f5966c"
             },
             "require": {
                 "php": ">=7.2.5",
                 "psr/container": "^1.1",
                 "symfony/deprecation-contracts": "^2.1|^3"
             },
-            "conflict": {
-                "ext-psr": "<1.1|>=2"
-            },
-            "suggest": {
-                "symfony/service-implementation": ""
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "2.5-dev"
                 },
                 "thanks": {
                     "name": "symfony/contracts",
                     "url": "https://github.com/symfony/contracts"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "Symfony\\Contracts\\Service\\": ""
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Generic abstractions related to writing services",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "abstractions",
-                "contracts",
-                "decoupling",
-                "interfaces",
-                "interoperability",
-                "standards"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/service-contracts/tree/v2.5.2"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-05-30T19:17:29+00:00"
+            "description": "Generic abstractions related to writing services"
         },
         {
             "name": "symfony/string",
             "version": "v5.4.21",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/string.git",
                 "reference": "edac10d167b78b1d90f46a80320d632de0bd9f2f"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/string/zipball/edac10d167b78b1d90f46a80320d632de0bd9f2f",
-                "reference": "edac10d167b78b1d90f46a80320d632de0bd9f2f",
-                "shasum": ""
+                "reference": "edac10d167b78b1d90f46a80320d632de0bd9f2f"
             },
             "require": {
                 "php": ">=7.2.5",
                 "symfony/polyfill-ctype": "~1.8",
                 "symfony/polyfill-intl-grapheme": "~1.0",
                 "symfony/polyfill-intl-normalizer": "~1.0",
                 "symfony/polyfill-mbstring": "~1.0",
                 "symfony/polyfill-php80": "~1.15"
             },
-            "conflict": {
-                "symfony/translation-contracts": ">=3.0"
-            },
-            "require-dev": {
-                "symfony/error-handler": "^4.4|^5.0|^6.0",
-                "symfony/http-client": "^4.4|^5.0|^6.0",
-                "symfony/translation-contracts": "^1.1|^2",
-                "symfony/var-exporter": "^4.4|^5.0|^6.0"
-            },
             "type": "library",
             "autoload": {
                 "files": [
                     "Resources/functions.php"
                 ],
                 "psr-4": {
                     "Symfony\\Component\\String\\": ""
                 },
                 "exclude-from-classmap": [
                     "/Tests/"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way",
-            "homepage": "https://symfony.com",
-            "keywords": [
-                "grapheme",
-                "i18n",
-                "string",
-                "unicode",
-                "utf-8",
-                "utf8"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/string/tree/v5.4.21"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2023-02-22T08:00:55+00:00"
+            "description": "Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way"
         }
     ],
     "packages-dev": [
         {
             "name": "phpstan/phpstan",
             "version": "1.10.7",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan.git",
                 "reference": "b10ceb526d9607903c5b2673f1fc8775dbe48975"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan/zipball/b10ceb526d9607903c5b2673f1fc8775dbe48975",
-                "reference": "b10ceb526d9607903c5b2673f1fc8775dbe48975",
-                "shasum": ""
+                "reference": "b10ceb526d9607903c5b2673f1fc8775dbe48975"
             },
             "require": {
                 "php": "^7.2|^8.0"
             },
-            "conflict": {
-                "phpstan/phpstan-shim": "*"
-            },
             "bin": [
                 "phpstan",
                 "phpstan.phar"
             ],
             "type": "library",
             "autoload": {
                 "files": [
                     "bootstrap.php"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "description": "PHPStan - PHP Static Analysis Tool",
-            "keywords": [
-                "dev",
-                "static analysis"
-            ],
-            "support": {
-                "docs": "https://phpstan.org/user-guide/getting-started",
-                "forum": "https://github.com/phpstan/phpstan/discussions",
-                "issues": "https://github.com/phpstan/phpstan/issues",
-                "security": "https://github.com/phpstan/phpstan/security/policy",
-                "source": "https://github.com/phpstan/phpstan-src"
-            },
-            "funding": [
-                {
-                    "url": "https://github.com/ondrejmirtes",
-                    "type": "github"
-                },
-                {
-                    "url": "https://github.com/phpstan",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/phpstan/phpstan",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2023-03-16T15:24:20+00:00"
+            "description": "PHPStan - PHP Static Analysis Tool"
         },
         {
             "name": "phpstan/phpstan-deprecation-rules",
             "version": "1.1.3",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-deprecation-rules.git",
                 "reference": "a22b36b955a2e9a3d39fe533b6c1bb5359f9c319"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-deprecation-rules/zipball/a22b36b955a2e9a3d39fe533b6c1bb5359f9c319",
-                "reference": "a22b36b955a2e9a3d39fe533b6c1bb5359f9c319",
-                "shasum": ""
+                "reference": "a22b36b955a2e9a3d39fe533b6c1bb5359f9c319"
             },
             "require": {
                 "php": "^7.2 || ^8.0",
                 "phpstan/phpstan": "^1.10"
             },
-            "require-dev": {
-                "php-parallel-lint/php-parallel-lint": "^1.2",
-                "phpstan/phpstan-php-parser": "^1.1",
-                "phpstan/phpstan-phpunit": "^1.0",
-                "phpunit/phpunit": "^9.5"
-            },
             "type": "phpstan-extension",
             "extra": {
                 "phpstan": {
                     "includes": [
                         "rules.neon"
                     ]
                 }
             },
             "autoload": {
                 "psr-4": {
                     "PHPStan\\": "src/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "description": "PHPStan rules for detecting usage of deprecated classes, methods, properties, constants and traits.",
-            "support": {
-                "issues": "https://github.com/phpstan/phpstan-deprecation-rules/issues",
-                "source": "https://github.com/phpstan/phpstan-deprecation-rules/tree/1.1.3"
-            },
-            "time": "2023-03-17T07:50:08+00:00"
+            "description": "PHPStan rules for detecting usage of deprecated classes, methods, properties, constants and traits."
         },
         {
             "name": "phpstan/phpstan-phpunit",
             "version": "1.3.10",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-phpunit.git",
                 "reference": "4cc5c6cc38e56bce7ea47c4091814e516d172dc3"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-phpunit/zipball/4cc5c6cc38e56bce7ea47c4091814e516d172dc3",
-                "reference": "4cc5c6cc38e56bce7ea47c4091814e516d172dc3",
-                "shasum": ""
+                "reference": "4cc5c6cc38e56bce7ea47c4091814e516d172dc3"
             },
             "require": {
                 "php": "^7.2 || ^8.0",
                 "phpstan/phpstan": "^1.10"
             },
-            "conflict": {
-                "phpunit/phpunit": "<7.0"
-            },
-            "require-dev": {
-                "nikic/php-parser": "^4.13.0",
-                "php-parallel-lint/php-parallel-lint": "^1.2",
-                "phpstan/phpstan-strict-rules": "^1.0",
-                "phpunit/phpunit": "^9.5"
-            },
             "type": "phpstan-extension",
             "extra": {
                 "phpstan": {
                     "includes": [
                         "extension.neon",
                         "rules.neon"
                     ]
                 }
             },
             "autoload": {
                 "psr-4": {
                     "PHPStan\\": "src/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "description": "PHPUnit extensions and rules for PHPStan",
-            "support": {
-                "issues": "https://github.com/phpstan/phpstan-phpunit/issues",
-                "source": "https://github.com/phpstan/phpstan-phpunit/tree/1.3.10"
-            },
-            "time": "2023-03-02T10:25:13+00:00"
+            "description": "PHPUnit extensions and rules for PHPStan"
         },
         {
             "name": "phpstan/phpstan-strict-rules",
             "version": "1.5.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-strict-rules.git",
                 "reference": "b7dd96a5503919a43b3cd06a2dced9d4252492f2"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-strict-rules/zipball/b7dd96a5503919a43b3cd06a2dced9d4252492f2",
-                "reference": "b7dd96a5503919a43b3cd06a2dced9d4252492f2",
-                "shasum": ""
+                "reference": "b7dd96a5503919a43b3cd06a2dced9d4252492f2"
             },
             "require": {
                 "php": "^7.2 || ^8.0",
                 "phpstan/phpstan": "^1.10"
             },
-            "require-dev": {
-                "nikic/php-parser": "^4.13.0",
-                "php-parallel-lint/php-parallel-lint": "^1.2",
-                "phpstan/phpstan-deprecation-rules": "^1.1",
-                "phpstan/phpstan-phpunit": "^1.0",
-                "phpunit/phpunit": "^9.5"
-            },
             "type": "phpstan-extension",
             "extra": {
                 "phpstan": {
                     "includes": [
                         "rules.neon"
                     ]
                 }
             },
             "autoload": {
                 "psr-4": {
                     "PHPStan\\": "src/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "description": "Extra strict and opinionated rules for PHPStan",
-            "support": {
-                "issues": "https://github.com/phpstan/phpstan-strict-rules/issues",
-                "source": "https://github.com/phpstan/phpstan-strict-rules/tree/1.5.0"
-            },
-            "time": "2023-02-21T10:17:10+00:00"
+            "description": "Extra strict and opinionated rules for PHPStan"
         },
         {
             "name": "phpstan/phpstan-symfony",
             "version": "1.2.23",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-symfony.git",
                 "reference": "8a8d0538ca943b20beda7e9799e14fb3683262d4"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-symfony/zipball/8a8d0538ca943b20beda7e9799e14fb3683262d4",
-                "reference": "8a8d0538ca943b20beda7e9799e14fb3683262d4",
-                "shasum": ""
+                "reference": "8a8d0538ca943b20beda7e9799e14fb3683262d4"
             },
             "require": {
                 "ext-simplexml": "*",
                 "php": "^7.2 || ^8.0",
                 "phpstan/phpstan": "^1.9.4"
             },
-            "conflict": {
-                "symfony/framework-bundle": "<3.0"
-            },
-            "require-dev": {
-                "nikic/php-parser": "^4.13.0",
-                "php-parallel-lint/php-parallel-lint": "^1.2",
-                "phpstan/phpstan-phpunit": "^1.0",
-                "phpstan/phpstan-strict-rules": "^1.0",
-                "phpunit/phpunit": "^9.5",
-                "psr/container": "1.0 || 1.1.1",
-                "symfony/config": "^5.4 || ^6.1",
-                "symfony/console": "^5.4 || ^6.1",
-                "symfony/dependency-injection": "^5.4 || ^6.1",
-                "symfony/form": "^5.4 || ^6.1",
-                "symfony/framework-bundle": "^5.4 || ^6.1",
-                "symfony/http-foundation": "^5.4 || ^6.1",
-                "symfony/messenger": "^5.4",
-                "symfony/polyfill-php80": "^1.24",
-                "symfony/serializer": "^5.4"
-            },
             "type": "phpstan-extension",
             "extra": {
                 "phpstan": {
                     "includes": [
                         "extension.neon",
                         "rules.neon"
                     ]
                 }
             },
             "autoload": {
                 "psr-4": {
                     "PHPStan\\": "src/"
                 }
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Lukáš Unger",
-                    "email": "looky.msc@gmail.com",
-                    "homepage": "https://lookyman.net"
-                }
-            ],
-            "description": "Symfony Framework extensions and rules for PHPStan",
-            "support": {
-                "issues": "https://github.com/phpstan/phpstan-symfony/issues",
-                "source": "https://github.com/phpstan/phpstan-symfony/tree/1.2.23"
-            },
-            "time": "2023-02-06T10:42:02+00:00"
+            "description": "Symfony Framework extensions and rules for PHPStan"
         },
         {
             "name": "symfony/phpunit-bridge",
             "version": "v6.2.7",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/phpunit-bridge.git",
                 "reference": "56965fae0b6b8d271015990eff5240ffff02e185"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/phpunit-bridge/zipball/56965fae0b6b8d271015990eff5240ffff02e185",
-                "reference": "56965fae0b6b8d271015990eff5240ffff02e185",
-                "shasum": ""
+                "reference": "56965fae0b6b8d271015990eff5240ffff02e185"
             },
             "require": {
                 "php": ">=7.1.3"
             },
-            "conflict": {
-                "phpunit/phpunit": "<7.5|9.1.2"
-            },
-            "require-dev": {
-                "symfony/deprecation-contracts": "^2.1|^3.0",
-                "symfony/error-handler": "^5.4|^6.0"
-            },
-            "suggest": {
-                "symfony/error-handler": "For tracking deprecated interfaces usages at runtime with DebugClassLoader"
-            },
             "bin": [
                 "bin/simple-phpunit"
             ],
             "type": "symfony-bridge",
             "extra": {
                 "thanks": {
                     "name": "phpunit/phpunit",
                     "url": "https://github.com/sebastianbergmann/phpunit"
                 }
             },
             "autoload": {
                 "files": [
                     "bootstrap.php"
                 ],
                 "psr-4": {
                     "Symfony\\Bridge\\PhpUnit\\": ""
                 },
                 "exclude-from-classmap": [
                     "/Tests/"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "MIT"
             ],
-            "authors": [
-                {
-                    "name": "Nicolas Grekas",
-                    "email": "p@tchwork.com"
-                },
-                {
-                    "name": "Symfony Community",
-                    "homepage": "https://symfony.com/contributors"
-                }
-            ],
-            "description": "Provides utilities for PHPUnit, especially user deprecation notices management",
-            "homepage": "https://symfony.com",
-            "support": {
-                "source": "https://github.com/symfony/phpunit-bridge/tree/v6.2.7"
-            },
-            "funding": [
-                {
-                    "url": "https://symfony.com/sponsor",
-                    "type": "custom"
-                },
-                {
-                    "url": "https://github.com/fabpot",
-                    "type": "github"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2023-02-16T09:57:23+00:00"
+            "description": "Provides utilities for PHPUnit, especially user deprecation notices management"
         }
     ],
     "aliases": [],
     "minimum-stability": "stable",
     "stability-flags": [],
     "prefer-stable": false,
     "prefer-lowest": false,
     "platform": {
         "php": "^7.2.5 || ^8.0"
     },
     "platform-dev": [],
     "platform-overrides": {
         "php": "7.2.5"
     },
     "plugin-api-version": "2.3.0"
 }
```
</details>
