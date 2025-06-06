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
    <summary>Composer's <a href='https://github.com/composer/composer/blob/2.8.9/composer.lock'>composer.lock</a> has 2480 lines, with the plugin the number is reduced to 1248.</summary>

```diff
 {
     "_readme": [
         "This file locks the dependencies of your project to a known state",
         "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
         "This file is @generated automatically"
     ],
     "content-hash": "346c859c80684f1cd23f57dc04f917b4",
     "packages": [
         {
             "name": "composer/ca-bundle",
             "version": "1.5.6",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/ca-bundle.git",
                 "reference": "f65c239c970e7f072f067ab78646e9f0b2935175"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/ca-bundle/zipball/f65c239c970e7f072f067ab78646e9f0b2935175",
-                "reference": "f65c239c970e7f072f067ab78646e9f0b2935175",
-                "shasum": ""
+                "reference": "f65c239c970e7f072f067ab78646e9f0b2935175"
             },
             "require": {
                 "ext-openssl": "*",
                 "ext-pcre": "*",
                 "php": "^7.2 || ^8.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.10",
-                "phpunit/phpunit": "^8 || ^9",
-                "psr/log": "^1.0 || ^2.0 || ^3.0",
-                "symfony/process": "^4.0 || ^5.0 || ^6.0 || ^7.0"
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
-                "source": "https://github.com/composer/ca-bundle/tree/1.5.6"
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
-            "time": "2025-03-06T14:30:56+00:00"
+            "description": "Lets you find a path to the system CA bundle, and includes a fallback to the Mozilla CA bundle."
         },
         {
             "name": "composer/class-map-generator",
             "version": "1.6.1",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/class-map-generator.git",
                 "reference": "134b705ddb0025d397d8318a75825fe3c9d1da34"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/class-map-generator/zipball/134b705ddb0025d397d8318a75825fe3c9d1da34",
-                "reference": "134b705ddb0025d397d8318a75825fe3c9d1da34",
-                "shasum": ""
+                "reference": "134b705ddb0025d397d8318a75825fe3c9d1da34"
             },
             "require": {
                 "composer/pcre": "^2.1 || ^3.1",
                 "php": "^7.2 || ^8.0",
                 "symfony/finder": "^4.4 || ^5.3 || ^6 || ^7"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.12 || ^2",
-                "phpstan/phpstan-deprecation-rules": "^1 || ^2",
-                "phpstan/phpstan-phpunit": "^1 || ^2",
-                "phpstan/phpstan-strict-rules": "^1.1 || ^2",
-                "phpunit/phpunit": "^8",
-                "symfony/filesystem": "^5.4 || ^6"
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
-                "source": "https://github.com/composer/class-map-generator/tree/1.6.1"
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
-            "time": "2025-03-24T13:50:44+00:00"
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
             "version": "2.3.2",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/pcre.git",
                 "reference": "ebb81df8f52b40172d14062ae96a06939d80a069"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/pcre/zipball/ebb81df8f52b40172d14062ae96a06939d80a069",
-                "reference": "ebb81df8f52b40172d14062ae96a06939d80a069",
-                "shasum": ""
+                "reference": "ebb81df8f52b40172d14062ae96a06939d80a069"
             },
             "require": {
                 "php": "^7.2 || ^8.0"
             },
-            "conflict": {
-                "phpstan/phpstan": "<1.11.10"
-            },
-            "require-dev": {
-                "phpstan/phpstan": "^1.12 || ^2",
-                "phpstan/phpstan-strict-rules": "^1 || ^2",
-                "phpunit/phpunit": "^8 || ^9"
-            },
             "type": "library",
             "extra": {
                 "phpstan": {
                     "includes": [
                         "extension.neon"
                     ]
                 },
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
-                "source": "https://github.com/composer/pcre/tree/2.3.2"
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
-            "time": "2024-11-12T16:24:47+00:00"
+            "description": "PCRE wrapping library that offers type-safe preg_* replacements."
         },
         {
             "name": "composer/semver",
             "version": "3.4.3",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/semver.git",
                 "reference": "4313d26ada5e0c4edfbd1dc481a92ff7bff91f12"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/semver/zipball/4313d26ada5e0c4edfbd1dc481a92ff7bff91f12",
-                "reference": "4313d26ada5e0c4edfbd1dc481a92ff7bff91f12",
-                "shasum": ""
+                "reference": "4313d26ada5e0c4edfbd1dc481a92ff7bff91f12"
             },
             "require": {
                 "php": "^5.3.2 || ^7.0 || ^8.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.11",
-                "symfony/phpunit-bridge": "^3 || ^7"
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
-                "irc": "ircs://irc.libera.chat:6697/composer",
-                "issues": "https://github.com/composer/semver/issues",
-                "source": "https://github.com/composer/semver/tree/3.4.3"
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
-            "time": "2024-09-19T14:15:21+00:00"
+            "description": "Semver library that offers utilities, version constraint parsing and validation."
         },
         {
             "name": "composer/spdx-licenses",
             "version": "1.5.9",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/spdx-licenses.git",
                 "reference": "edf364cefe8c43501e21e88110aac10b284c3c9f"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/spdx-licenses/zipball/edf364cefe8c43501e21e88110aac10b284c3c9f",
-                "reference": "edf364cefe8c43501e21e88110aac10b284c3c9f",
-                "shasum": ""
+                "reference": "edf364cefe8c43501e21e88110aac10b284c3c9f"
             },
             "require": {
                 "php": "^5.3.2 || ^7.0 || ^8.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.11",
-                "symfony/phpunit-bridge": "^3 || ^7"
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
-                "irc": "ircs://irc.libera.chat:6697/composer",
-                "issues": "https://github.com/composer/spdx-licenses/issues",
-                "source": "https://github.com/composer/spdx-licenses/tree/1.5.9"
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
-            "time": "2025-05-12T21:07:07+00:00"
+            "description": "SPDX licenses list and validation library."
         },
         {
             "name": "composer/xdebug-handler",
             "version": "3.0.5",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/xdebug-handler.git",
                 "reference": "6c1925561632e83d60a44492e0b344cf48ab85ef"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/xdebug-handler/zipball/6c1925561632e83d60a44492e0b344cf48ab85ef",
-                "reference": "6c1925561632e83d60a44492e0b344cf48ab85ef",
-                "shasum": ""
+                "reference": "6c1925561632e83d60a44492e0b344cf48ab85ef"
             },
             "require": {
                 "composer/pcre": "^1 || ^2 || ^3",
                 "php": "^7.2.5 || ^8.0",
                 "psr/log": "^1 || ^2 || ^3"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.0",
-                "phpstan/phpstan-strict-rules": "^1.1",
-                "phpunit/phpunit": "^8.5 || ^9.6 || ^10.5"
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
-                "irc": "ircs://irc.libera.chat:6697/composer",
-                "issues": "https://github.com/composer/xdebug-handler/issues",
-                "source": "https://github.com/composer/xdebug-handler/tree/3.0.5"
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
-            "time": "2024-05-06T16:37:16+00:00"
+            "description": "Restarts a process without Xdebug."
         },
         {
             "name": "justinrainbow/json-schema",
             "version": "6.4.1",
             "source": {
                 "type": "git",
                 "url": "https://github.com/jsonrainbow/json-schema.git",
                 "reference": "35d262c94959571e8736db1e5c9bc36ab94ae900"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/jsonrainbow/json-schema/zipball/35d262c94959571e8736db1e5c9bc36ab94ae900",
-                "reference": "35d262c94959571e8736db1e5c9bc36ab94ae900",
-                "shasum": ""
+                "reference": "35d262c94959571e8736db1e5c9bc36ab94ae900"
             },
             "require": {
                 "ext-json": "*",
                 "marc-mabe/php-enum": "^4.0",
                 "php": "^7.2 || ^8.0"
             },
-            "require-dev": {
-                "friendsofphp/php-cs-fixer": "3.3.0",
-                "json-schema/json-schema-test-suite": "1.2.0",
-                "marc-mabe/php-enum-phpstan": "^2.0",
-                "phpspec/prophecy": "^1.19",
-                "phpstan/phpstan": "^1.12",
-                "phpunit/phpunit": "^8.5"
-            },
             "bin": [
                 "bin/validate-json"
             ],
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-master": "6.x-dev"
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
-            "homepage": "https://github.com/jsonrainbow/json-schema",
-            "keywords": [
-                "json",
-                "schema"
-            ],
-            "support": {
-                "issues": "https://github.com/jsonrainbow/json-schema/issues",
-                "source": "https://github.com/jsonrainbow/json-schema/tree/6.4.1"
-            },
-            "time": "2025-04-04T13:08:07+00:00"
+            "description": "A library to validate a json schema."
         },
         {
             "name": "marc-mabe/php-enum",
             "version": "v4.7.1",
             "source": {
                 "type": "git",
                 "url": "https://github.com/marc-mabe/php-enum.git",
                 "reference": "7159809e5cfa041dca28e61f7f7ae58063aae8ed"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/marc-mabe/php-enum/zipball/7159809e5cfa041dca28e61f7f7ae58063aae8ed",
-                "reference": "7159809e5cfa041dca28e61f7f7ae58063aae8ed",
-                "shasum": ""
+                "reference": "7159809e5cfa041dca28e61f7f7ae58063aae8ed"
             },
             "require": {
                 "ext-reflection": "*",
                 "php": "^7.1 | ^8.0"
             },
-            "require-dev": {
-                "phpbench/phpbench": "^0.16.10 || ^1.0.4",
-                "phpstan/phpstan": "^1.3.1",
-                "phpunit/phpunit": "^7.5.20 | ^8.5.22 | ^9.5.11",
-                "vimeo/psalm": "^4.17.0 | ^5.26.1"
-            },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-3.x": "3.2-dev",
                     "dev-master": "4.7-dev"
                 }
             },
             "autoload": {
                 "psr-4": {
                     "MabeEnum\\": "src/"
                 },
                 "classmap": [
                     "stubs/Stringable.php"
                 ]
             },
-            "notification-url": "https://packagist.org/downloads/",
             "license": [
                 "BSD-3-Clause"
             ],
-            "authors": [
-                {
-                    "name": "Marc Bennewitz",
-                    "email": "dev@mabe.berlin",
-                    "homepage": "https://mabe.berlin/",
-                    "role": "Lead"
-                }
-            ],
-            "description": "Simple and fast implementation of enumerations with native PHP",
-            "homepage": "https://github.com/marc-mabe/php-enum",
-            "keywords": [
-                "enum",
-                "enum-map",
-                "enum-set",
-                "enumeration",
-                "enumerator",
-                "enummap",
-                "enumset",
-                "map",
-                "set",
-                "type",
-                "type-hint",
-                "typehint"
-            ],
-            "support": {
-                "issues": "https://github.com/marc-mabe/php-enum/issues",
-                "source": "https://github.com/marc-mabe/php-enum/tree/v4.7.1"
-            },
-            "time": "2024-11-28T04:54:44+00:00"
+            "description": "Simple and fast implementation of enumerations with native PHP"
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
             "version": "v3.2.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/reactphp/promise.git",
                 "reference": "8a164643313c71354582dc850b42b33fa12a4b63"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/reactphp/promise/zipball/8a164643313c71354582dc850b42b33fa12a4b63",
-                "reference": "8a164643313c71354582dc850b42b33fa12a4b63",
-                "shasum": ""
+                "reference": "8a164643313c71354582dc850b42b33fa12a4b63"
             },
             "require": {
                 "php": ">=7.1.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "1.10.39 || 1.4.10",
-                "phpunit/phpunit": "^9.6 || ^7.5"
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
-                "source": "https://github.com/reactphp/promise/tree/v3.2.0"
-            },
-            "funding": [
-                {
-                    "url": "https://opencollective.com/reactphp",
-                    "type": "open_collective"
-                }
-            ],
-            "time": "2024-05-24T10:39:05+00:00"
+            "description": "A lightweight implementation of CommonJS Promises/A for PHP"
         },
         {
             "name": "seld/jsonlint",
             "version": "1.11.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/Seldaek/jsonlint.git",
                 "reference": "1748aaf847fc731cfad7725aec413ee46f0cc3a2"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/Seldaek/jsonlint/zipball/1748aaf847fc731cfad7725aec413ee46f0cc3a2",
-                "reference": "1748aaf847fc731cfad7725aec413ee46f0cc3a2",
-                "shasum": ""
+                "reference": "1748aaf847fc731cfad7725aec413ee46f0cc3a2"
             },
             "require": {
                 "php": "^5.3 || ^7.0 || ^8.0"
             },
-            "require-dev": {
-                "phpstan/phpstan": "^1.11",
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
-                    "homepage": "https://seld.be"
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
-                "source": "https://github.com/Seldaek/jsonlint/tree/1.11.0"
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
-            "time": "2024-07-11T14:55:45+00:00"
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
             "version": "2.0.2",
             "source": {
                 "type": "git",
                 "url": "https://github.com/Seldaek/signal-handler.git",
                 "reference": "04a6112e883ad76c0ada8e4a9f7520bbfdb6bb98"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/Seldaek/signal-handler/zipball/04a6112e883ad76c0ada8e4a9f7520bbfdb6bb98",
-                "reference": "04a6112e883ad76c0ada8e4a9f7520bbfdb6bb98",
-                "shasum": ""
+                "reference": "04a6112e883ad76c0ada8e4a9f7520bbfdb6bb98"
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
-                "source": "https://github.com/Seldaek/signal-handler/tree/2.0.2"
-            },
-            "time": "2023-09-03T09:24:00+00:00"
+            "description": "Simple unix signal handler that silently fails where signals are not supported for easy cross-platform development"
         },
         {
             "name": "symfony/console",
             "version": "v5.4.47",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/console.git",
                 "reference": "c4ba980ca61a9eb18ee6bcc73f28e475852bb1ed"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/console/zipball/c4ba980ca61a9eb18ee6bcc73f28e475852bb1ed",
-                "reference": "c4ba980ca61a9eb18ee6bcc73f28e475852bb1ed",
-                "shasum": ""
+                "reference": "c4ba980ca61a9eb18ee6bcc73f28e475852bb1ed"
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
-                "command-line",
-                "console",
-                "terminal"
-            ],
-            "support": {
-                "source": "https://github.com/symfony/console/tree/v5.4.47"
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
-            "time": "2024-11-06T11:30:55+00:00"
+            "description": "Eases the creation of beautiful and testable command line interfaces"
         },
         {
             "name": "symfony/deprecation-contracts",
             "version": "v2.5.4",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/deprecation-contracts.git",
                 "reference": "605389f2a7e5625f273b53960dc46aeaf9c62918"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/deprecation-contracts/zipball/605389f2a7e5625f273b53960dc46aeaf9c62918",
-                "reference": "605389f2a7e5625f273b53960dc46aeaf9c62918",
-                "shasum": ""
+                "reference": "605389f2a7e5625f273b53960dc46aeaf9c62918"
             },
             "require": {
                 "php": ">=7.1"
             },
             "type": "library",
             "extra": {
                 "thanks": {
                     "url": "https://github.com/symfony/contracts",
                     "name": "symfony/contracts"
                 },
                 "branch-alias": {
                     "dev-main": "2.5-dev"
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
-                "source": "https://github.com/symfony/deprecation-contracts/tree/v2.5.4"
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
-            "time": "2024-09-25T14:11:13+00:00"
+            "description": "A generic function and convention to trigger deprecation notices"
         },
         {
             "name": "symfony/filesystem",
             "version": "v5.4.45",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/filesystem.git",
                 "reference": "57c8294ed37d4a055b77057827c67f9558c95c54"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/filesystem/zipball/57c8294ed37d4a055b77057827c67f9558c95c54",
-                "reference": "57c8294ed37d4a055b77057827c67f9558c95c54",
-                "shasum": ""
+                "reference": "57c8294ed37d4a055b77057827c67f9558c95c54"
             },
             "require": {
                 "php": ">=7.2.5",
                 "symfony/polyfill-ctype": "~1.8",
                 "symfony/polyfill-mbstring": "~1.8",
                 "symfony/polyfill-php80": "^1.16"
             },
-            "require-dev": {
-                "symfony/process": "^5.4|^6.4"
-            },
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
-                "source": "https://github.com/symfony/filesystem/tree/v5.4.45"
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
-            "time": "2024-10-22T13:05:35+00:00"
+            "description": "Provides basic utilities for the filesystem"
         },
         {
             "name": "symfony/finder",
             "version": "v5.4.45",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/finder.git",
                 "reference": "63741784cd7b9967975eec610b256eed3ede022b"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/finder/zipball/63741784cd7b9967975eec610b256eed3ede022b",
-                "reference": "63741784cd7b9967975eec610b256eed3ede022b",
-                "shasum": ""
+                "reference": "63741784cd7b9967975eec610b256eed3ede022b"
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
-                "source": "https://github.com/symfony/finder/tree/v5.4.45"
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
-            "time": "2024-09-28T13:32:08+00:00"
+            "description": "Finds files and directories via an intuitive fluent interface"
         },
         {
             "name": "symfony/polyfill-ctype",
             "version": "v1.32.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-ctype.git",
                 "reference": "a3cc8b044a6ea513310cbd48ef7333b384945638"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-ctype/zipball/a3cc8b044a6ea513310cbd48ef7333b384945638",
-                "reference": "a3cc8b044a6ea513310cbd48ef7333b384945638",
-                "shasum": ""
+                "reference": "a3cc8b044a6ea513310cbd48ef7333b384945638"
             },
             "require": {
                 "php": ">=7.2"
             },
             "provide": {
                 "ext-ctype": "*"
             },
-            "suggest": {
-                "ext-ctype": "For best performance"
-            },
             "type": "library",
             "extra": {
                 "thanks": {
                     "url": "https://github.com/symfony/polyfill",
                     "name": "symfony/polyfill"
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
-                "source": "https://github.com/symfony/polyfill-ctype/tree/v1.32.0"
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
-            "time": "2024-09-09T11:45:10+00:00"
+            "description": "Symfony polyfill for ctype functions"
         },
         {
             "name": "symfony/polyfill-intl-grapheme",
             "version": "v1.32.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-intl-grapheme.git",
                 "reference": "b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-intl-grapheme/zipball/b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe",
-                "reference": "b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe",
-                "shasum": ""
+                "reference": "b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe"
             },
             "require": {
                 "php": ">=7.2"
             },
-            "suggest": {
-                "ext-intl": "For best performance"
-            },
             "type": "library",
             "extra": {
                 "thanks": {
                     "url": "https://github.com/symfony/polyfill",
                     "name": "symfony/polyfill"
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
-                "source": "https://github.com/symfony/polyfill-intl-grapheme/tree/v1.32.0"
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
-            "time": "2024-09-09T11:45:10+00:00"
+            "description": "Symfony polyfill for intl's grapheme_* functions"
         },
         {
             "name": "symfony/polyfill-intl-normalizer",
             "version": "v1.32.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-intl-normalizer.git",
                 "reference": "3833d7255cc303546435cb650316bff708a1c75c"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-intl-normalizer/zipball/3833d7255cc303546435cb650316bff708a1c75c",
-                "reference": "3833d7255cc303546435cb650316bff708a1c75c",
-                "shasum": ""
+                "reference": "3833d7255cc303546435cb650316bff708a1c75c"
             },
             "require": {
                 "php": ">=7.2"
             },
-            "suggest": {
-                "ext-intl": "For best performance"
-            },
             "type": "library",
             "extra": {
                 "thanks": {
                     "url": "https://github.com/symfony/polyfill",
                     "name": "symfony/polyfill"
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
-                "source": "https://github.com/symfony/polyfill-intl-normalizer/tree/v1.32.0"
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
-            "time": "2024-09-09T11:45:10+00:00"
+            "description": "Symfony polyfill for intl's Normalizer class and related functions"
         },
         {
             "name": "symfony/polyfill-mbstring",
             "version": "v1.32.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-mbstring.git",
                 "reference": "6d857f4d76bd4b343eac26d6b539585d2bc56493"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-mbstring/zipball/6d857f4d76bd4b343eac26d6b539585d2bc56493",
-                "reference": "6d857f4d76bd4b343eac26d6b539585d2bc56493",
-                "shasum": ""
+                "reference": "6d857f4d76bd4b343eac26d6b539585d2bc56493"
             },
             "require": {
                 "ext-iconv": "*",
                 "php": ">=7.2"
             },
             "provide": {
                 "ext-mbstring": "*"
             },
-            "suggest": {
-                "ext-mbstring": "For best performance"
-            },
             "type": "library",
             "extra": {
                 "thanks": {
                     "url": "https://github.com/symfony/polyfill",
                     "name": "symfony/polyfill"
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
-                "source": "https://github.com/symfony/polyfill-mbstring/tree/v1.32.0"
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
-            "time": "2024-12-23T08:48:59+00:00"
+            "description": "Symfony polyfill for the Mbstring extension"
         },
         {
             "name": "symfony/polyfill-php73",
             "version": "v1.32.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-php73.git",
                 "reference": "0f68c03565dcaaf25a890667542e8bd75fe7e5bb"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-php73/zipball/0f68c03565dcaaf25a890667542e8bd75fe7e5bb",
-                "reference": "0f68c03565dcaaf25a890667542e8bd75fe7e5bb",
-                "shasum": ""
+                "reference": "0f68c03565dcaaf25a890667542e8bd75fe7e5bb"
             },
             "require": {
                 "php": ">=7.2"
             },
             "type": "library",
             "extra": {
                 "thanks": {
                     "url": "https://github.com/symfony/polyfill",
                     "name": "symfony/polyfill"
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
-                "source": "https://github.com/symfony/polyfill-php73/tree/v1.32.0"
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
-            "time": "2024-09-09T11:45:10+00:00"
+            "description": "Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions"
         },
         {
             "name": "symfony/polyfill-php80",
             "version": "v1.32.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-php80.git",
                 "reference": "0cc9dd0f17f61d8131e7df6b84bd344899fe2608"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-php80/zipball/0cc9dd0f17f61d8131e7df6b84bd344899fe2608",
-                "reference": "0cc9dd0f17f61d8131e7df6b84bd344899fe2608",
-                "shasum": ""
+                "reference": "0cc9dd0f17f61d8131e7df6b84bd344899fe2608"
             },
             "require": {
                 "php": ">=7.2"
             },
             "type": "library",
             "extra": {
                 "thanks": {
                     "url": "https://github.com/symfony/polyfill",
                     "name": "symfony/polyfill"
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
-                "source": "https://github.com/symfony/polyfill-php80/tree/v1.32.0"
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
-            "time": "2025-01-02T08:10:11+00:00"
+            "description": "Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions"
         },
         {
             "name": "symfony/polyfill-php81",
             "version": "v1.32.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-php81.git",
                 "reference": "4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-php81/zipball/4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c",
-                "reference": "4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c",
-                "shasum": ""
+                "reference": "4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c"
             },
             "require": {
                 "php": ">=7.2"
             },
             "type": "library",
             "extra": {
                 "thanks": {
                     "url": "https://github.com/symfony/polyfill",
                     "name": "symfony/polyfill"
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
-                "source": "https://github.com/symfony/polyfill-php81/tree/v1.32.0"
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
-            "time": "2024-09-09T11:45:10+00:00"
+            "description": "Symfony polyfill backporting some PHP 8.1+ features to lower PHP versions"
         },
         {
             "name": "symfony/process",
             "version": "v5.4.47",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/process.git",
                 "reference": "5d1662fb32ebc94f17ddb8d635454a776066733d"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/process/zipball/5d1662fb32ebc94f17ddb8d635454a776066733d",
-                "reference": "5d1662fb32ebc94f17ddb8d635454a776066733d",
-                "shasum": ""
+                "reference": "5d1662fb32ebc94f17ddb8d635454a776066733d"
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
-                "source": "https://github.com/symfony/process/tree/v5.4.47"
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
-            "time": "2024-11-06T11:36:42+00:00"
+            "description": "Executes commands in sub-processes"
         },
         {
             "name": "symfony/service-contracts",
             "version": "v2.5.4",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/service-contracts.git",
                 "reference": "f37b419f7aea2e9abf10abd261832cace12e3300"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/service-contracts/zipball/f37b419f7aea2e9abf10abd261832cace12e3300",
-                "reference": "f37b419f7aea2e9abf10abd261832cace12e3300",
-                "shasum": ""
+                "reference": "f37b419f7aea2e9abf10abd261832cace12e3300"
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
                 "thanks": {
                     "url": "https://github.com/symfony/contracts",
                     "name": "symfony/contracts"
                 },
                 "branch-alias": {
                     "dev-main": "2.5-dev"
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
-                "source": "https://github.com/symfony/service-contracts/tree/v2.5.4"
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
-            "time": "2024-09-25T14:11:13+00:00"
+            "description": "Generic abstractions related to writing services"
         },
         {
             "name": "symfony/string",
             "version": "v5.4.47",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/string.git",
                 "reference": "136ca7d72f72b599f2631aca474a4f8e26719799"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/string/zipball/136ca7d72f72b599f2631aca474a4f8e26719799",
-                "reference": "136ca7d72f72b599f2631aca474a4f8e26719799",
-                "shasum": ""
+                "reference": "136ca7d72f72b599f2631aca474a4f8e26719799"
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
-                "source": "https://github.com/symfony/string/tree/v5.4.47"
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
-            "time": "2024-11-10T20:33:58+00:00"
+            "description": "Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way"
         }
     ],
     "packages-dev": [
         {
             "name": "phpstan/phpstan",
             "version": "1.12.25",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan.git",
                 "reference": "e310849a19e02b8bfcbb63147f495d8f872dd96f"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan/zipball/e310849a19e02b8bfcbb63147f495d8f872dd96f",
-                "reference": "e310849a19e02b8bfcbb63147f495d8f872dd96f",
-                "shasum": ""
+                "reference": "e310849a19e02b8bfcbb63147f495d8f872dd96f"
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
-                }
-            ],
-            "time": "2025-04-27T12:20:45+00:00"
+            "description": "PHPStan - PHP Static Analysis Tool"
         },
         {
             "name": "phpstan/phpstan-deprecation-rules",
             "version": "1.2.1",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-deprecation-rules.git",
                 "reference": "f94d246cc143ec5a23da868f8f7e1393b50eaa82"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-deprecation-rules/zipball/f94d246cc143ec5a23da868f8f7e1393b50eaa82",
-                "reference": "f94d246cc143ec5a23da868f8f7e1393b50eaa82",
-                "shasum": ""
+                "reference": "f94d246cc143ec5a23da868f8f7e1393b50eaa82"
             },
             "require": {
                 "php": "^7.2 || ^8.0",
                 "phpstan/phpstan": "^1.12"
             },
-            "require-dev": {
-                "php-parallel-lint/php-parallel-lint": "^1.2",
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
-                "source": "https://github.com/phpstan/phpstan-deprecation-rules/tree/1.2.1"
-            },
-            "time": "2024-09-11T15:52:35+00:00"
+            "description": "PHPStan rules for detecting usage of deprecated classes, methods, properties, constants and traits."
         },
         {
             "name": "phpstan/phpstan-phpunit",
             "version": "1.4.2",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-phpunit.git",
                 "reference": "72a6721c9b64b3e4c9db55abbc38f790b318267e"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-phpunit/zipball/72a6721c9b64b3e4c9db55abbc38f790b318267e",
-                "reference": "72a6721c9b64b3e4c9db55abbc38f790b318267e",
-                "shasum": ""
+                "reference": "72a6721c9b64b3e4c9db55abbc38f790b318267e"
             },
             "require": {
                 "php": "^7.2 || ^8.0",
                 "phpstan/phpstan": "^1.12"
             },
-            "conflict": {
-                "phpunit/phpunit": "<7.0"
-            },
-            "require-dev": {
-                "nikic/php-parser": "^4.13.0",
-                "php-parallel-lint/php-parallel-lint": "^1.2",
-                "phpstan/phpstan-strict-rules": "^1.5.1",
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
-                "source": "https://github.com/phpstan/phpstan-phpunit/tree/1.4.2"
-            },
-            "time": "2024-12-17T17:20:49+00:00"
+            "description": "PHPUnit extensions and rules for PHPStan"
         },
         {
             "name": "phpstan/phpstan-strict-rules",
             "version": "1.6.2",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-strict-rules.git",
                 "reference": "b564ca479e7e735f750aaac4935af965572a7845"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-strict-rules/zipball/b564ca479e7e735f750aaac4935af965572a7845",
-                "reference": "b564ca479e7e735f750aaac4935af965572a7845",
-                "shasum": ""
+                "reference": "b564ca479e7e735f750aaac4935af965572a7845"
             },
             "require": {
                 "php": "^7.2 || ^8.0",
                 "phpstan/phpstan": "^1.12.4"
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
-                "source": "https://github.com/phpstan/phpstan-strict-rules/tree/1.6.2"
-            },
-            "time": "2025-01-19T13:02:24+00:00"
+            "description": "Extra strict and opinionated rules for PHPStan"
         },
         {
             "name": "phpstan/phpstan-symfony",
             "version": "1.4.15",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-symfony.git",
                 "reference": "78b6b5a62f56731d938031c8f59817ed83b2328a"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-symfony/zipball/78b6b5a62f56731d938031c8f59817ed83b2328a",
-                "reference": "78b6b5a62f56731d938031c8f59817ed83b2328a",
-                "shasum": ""
+                "reference": "78b6b5a62f56731d938031c8f59817ed83b2328a"
             },
             "require": {
                 "ext-simplexml": "*",
                 "php": "^7.2 || ^8.0",
                 "phpstan/phpstan": "^1.12"
             },
-            "conflict": {
-                "symfony/framework-bundle": "<3.0"
-            },
-            "require-dev": {
-                "nikic/php-parser": "^4.13.0",
-                "php-parallel-lint/php-parallel-lint": "^1.2",
-                "phpstan/phpstan-phpunit": "^1.3.11",
-                "phpstan/phpstan-strict-rules": "^1.5.1",
-                "phpunit/phpunit": "^8.5.29 || ^9.5",
-                "psr/container": "1.0 || 1.1.1",
-                "symfony/config": "^5.4 || ^6.1",
-                "symfony/console": "^5.4 || ^6.1",
-                "symfony/dependency-injection": "^5.4 || ^6.1",
-                "symfony/form": "^5.4 || ^6.1",
-                "symfony/framework-bundle": "^5.4 || ^6.1",
-                "symfony/http-foundation": "^5.4 || ^6.1",
-                "symfony/messenger": "^5.4",
-                "symfony/polyfill-php80": "^1.24",
-                "symfony/serializer": "^5.4",
-                "symfony/service-contracts": "^2.2.0"
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
-                "source": "https://github.com/phpstan/phpstan-symfony/tree/1.4.15"
-            },
-            "time": "2025-03-28T12:01:24+00:00"
+            "description": "Symfony Framework extensions and rules for PHPStan"
         },
         {
             "name": "symfony/phpunit-bridge",
             "version": "v7.2.6",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/phpunit-bridge.git",
                 "reference": "6106ae85a0e3ed509d339b7f924788c9cc4e7cfb"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/phpunit-bridge/zipball/6106ae85a0e3ed509d339b7f924788c9cc4e7cfb",
-                "reference": "6106ae85a0e3ed509d339b7f924788c9cc4e7cfb",
-                "shasum": ""
+                "reference": "6106ae85a0e3ed509d339b7f924788c9cc4e7cfb"
             },
             "require": {
                 "php": ">=7.2.5"
             },
-            "conflict": {
-                "phpunit/phpunit": "<7.5|9.1.2"
-            },
-            "require-dev": {
-                "symfony/deprecation-contracts": "^2.5|^3.0",
-                "symfony/error-handler": "^5.4|^6.4|^7.0",
-                "symfony/polyfill-php81": "^1.27"
-            },
             "bin": [
                 "bin/simple-phpunit"
             ],
             "type": "symfony-bridge",
             "extra": {
                 "thanks": {
                     "url": "https://github.com/sebastianbergmann/phpunit",
                     "name": "phpunit/phpunit"
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
                     "/Tests/",
                     "/bin/"
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
-                "source": "https://github.com/symfony/phpunit-bridge/tree/v7.2.6"
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
-            "time": "2025-04-09T08:35:42+00:00"
+            "description": "Provides utilities for PHPUnit, especially user deprecation notices management"
         }
     ],
     "aliases": [],
     "minimum-stability": "stable",
     "stability-flags": {},
     "prefer-stable": false,
     "prefer-lowest": false,
     "platform": {
         "php": "^7.2.5 || ^8.0"
     },
     "platform-dev": {},
     "platform-overrides": {
         "php": "7.2.5"
     },
     "plugin-api-version": "2.6.0"
 }
```
</details>
