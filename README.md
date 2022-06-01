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
    <summary>Composer's <a href='https://github.com/composer/composer/blob/2.3.3/composer.lock'>composer.lock</a> has 2210 lines, with the plugin the number is reduced to 1124.</summary>

```diff
 {
     "_readme": [
         "This file locks the dependencies of your project to a known state",
         "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
         "This file is @generated automatically"
     ],
     "content-hash": "3a7c7da73f59287030b9704930778e2b",
     "packages": [
         {
             "name": "composer/ca-bundle",
             "version": "1.3.1",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/ca-bundle.git",
                 "reference": "4c679186f2aca4ab6a0f1b0b9cf9252decb44d0b"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/ca-bundle/zipball/4c679186f2aca4ab6a0f1b0b9cf9252decb44d0b",
-                "reference": "4c679186f2aca4ab6a0f1b0b9cf9252decb44d0b",
-                "shasum": ""
+                "reference": "4c679186f2aca4ab6a0f1b0b9cf9252decb44d0b"
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
-                "source": "https://github.com/composer/ca-bundle/tree/1.3.1"
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
-            "time": "2021-10-28T20:44:15+00:00"
+            "description": "Lets you find a path to the system CA bundle, and includes a fallback to the Mozilla CA bundle."
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
             "version": "2.0.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/pcre.git",
                 "reference": "c8e9d27cfc5ed22643c19c160455b473ffd8aabe"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/pcre/zipball/c8e9d27cfc5ed22643c19c160455b473ffd8aabe",
-                "reference": "c8e9d27cfc5ed22643c19c160455b473ffd8aabe",
-                "shasum": ""
+                "reference": "c8e9d27cfc5ed22643c19c160455b473ffd8aabe"
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
-                "source": "https://github.com/composer/pcre/tree/2.0.0"
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
-            "time": "2022-02-25T20:05:29+00:00"
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
             "version": "1.5.6",
             "source": {
                 "type": "git",
                 "url": "https://github.com/composer/spdx-licenses.git",
                 "reference": "a30d487169d799745ca7280bc90fdfa693536901"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/composer/spdx-licenses/zipball/a30d487169d799745ca7280bc90fdfa693536901",
-                "reference": "a30d487169d799745ca7280bc90fdfa693536901",
-                "shasum": ""
+                "reference": "a30d487169d799745ca7280bc90fdfa693536901"
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
-                "source": "https://github.com/composer/spdx-licenses/tree/1.5.6"
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
-            "time": "2021-11-18T10:14:14+00:00"
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
             "version": "5.2.11",
             "source": {
                 "type": "git",
                 "url": "https://github.com/justinrainbow/json-schema.git",
                 "reference": "2ab6744b7296ded80f8cc4f9509abbff393399aa"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/justinrainbow/json-schema/zipball/2ab6744b7296ded80f8cc4f9509abbff393399aa",
-                "reference": "2ab6744b7296ded80f8cc4f9509abbff393399aa",
-                "shasum": ""
+                "reference": "2ab6744b7296ded80f8cc4f9509abbff393399aa"
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
-                "source": "https://github.com/justinrainbow/json-schema/tree/5.2.11"
-            },
-            "time": "2021-07-22T09:24:00+00:00"
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
             "version": "1.2.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/Seldaek/phar-utils.git",
                 "reference": "9f3452c93ff423469c0d56450431562ca423dcee"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/Seldaek/phar-utils/zipball/9f3452c93ff423469c0d56450431562ca423dcee",
-                "reference": "9f3452c93ff423469c0d56450431562ca423dcee",
-                "shasum": ""
+                "reference": "9f3452c93ff423469c0d56450431562ca423dcee"
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
-                "source": "https://github.com/Seldaek/phar-utils/tree/1.2.0"
-            },
-            "time": "2021-12-10T11:20:11+00:00"
+            "description": "PHAR file format utilities, for when PHP phars you up"
         },
         {
             "name": "symfony/console",
             "version": "v5.4.5",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/console.git",
                 "reference": "d8111acc99876953f52fe16d4c50eb60940d49ad"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/console/zipball/d8111acc99876953f52fe16d4c50eb60940d49ad",
-                "reference": "d8111acc99876953f52fe16d4c50eb60940d49ad",
-                "shasum": ""
+                "reference": "d8111acc99876953f52fe16d4c50eb60940d49ad"
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
-                "source": "https://github.com/symfony/console/tree/v5.4.5"
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
-            "time": "2022-02-24T12:45:35+00:00"
+            "description": "Eases the creation of beautiful and testable command line interfaces"
         },
         {
             "name": "symfony/deprecation-contracts",
             "version": "v2.5.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/deprecation-contracts.git",
                 "reference": "6f981ee24cf69ee7ce9736146d1c57c2780598a8"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/deprecation-contracts/zipball/6f981ee24cf69ee7ce9736146d1c57c2780598a8",
-                "reference": "6f981ee24cf69ee7ce9736146d1c57c2780598a8",
-                "shasum": ""
+                "reference": "6f981ee24cf69ee7ce9736146d1c57c2780598a8"
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
-                "source": "https://github.com/symfony/deprecation-contracts/tree/v2.5.0"
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
-            "time": "2021-07-12T14:48:14+00:00"
+            "description": "A generic function and convention to trigger deprecation notices"
         },
         {
             "name": "symfony/filesystem",
             "version": "v5.4.6",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/filesystem.git",
                 "reference": "d53a45039974952af7f7ebc461ccdd4295e29440"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/filesystem/zipball/d53a45039974952af7f7ebc461ccdd4295e29440",
-                "reference": "d53a45039974952af7f7ebc461ccdd4295e29440",
-                "shasum": ""
+                "reference": "d53a45039974952af7f7ebc461ccdd4295e29440"
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
-                "source": "https://github.com/symfony/filesystem/tree/v5.4.6"
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
-            "time": "2022-03-02T12:42:23+00:00"
+            "description": "Provides basic utilities for the filesystem"
         },
         {
             "name": "symfony/finder",
             "version": "v5.4.3",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/finder.git",
                 "reference": "231313534dded84c7ecaa79d14bc5da4ccb69b7d"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/finder/zipball/231313534dded84c7ecaa79d14bc5da4ccb69b7d",
-                "reference": "231313534dded84c7ecaa79d14bc5da4ccb69b7d",
-                "shasum": ""
+                "reference": "231313534dded84c7ecaa79d14bc5da4ccb69b7d"
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
-                "source": "https://github.com/symfony/finder/tree/v5.4.3"
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
-            "time": "2022-01-26T16:34:36+00:00"
+            "description": "Finds files and directories via an intuitive fluent interface"
         },
         {
             "name": "symfony/polyfill-ctype",
             "version": "v1.25.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-ctype.git",
                 "reference": "30885182c981ab175d4d034db0f6f469898070ab"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-ctype/zipball/30885182c981ab175d4d034db0f6f469898070ab",
-                "reference": "30885182c981ab175d4d034db0f6f469898070ab",
-                "shasum": ""
+                "reference": "30885182c981ab175d4d034db0f6f469898070ab"
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
                     "dev-main": "1.23-dev"
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
-                "source": "https://github.com/symfony/polyfill-ctype/tree/v1.25.0"
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
-            "time": "2021-10-20T20:35:02+00:00"
+            "description": "Symfony polyfill for ctype functions"
         },
         {
             "name": "symfony/polyfill-intl-grapheme",
             "version": "v1.25.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-intl-grapheme.git",
                 "reference": "81b86b50cf841a64252b439e738e97f4a34e2783"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-intl-grapheme/zipball/81b86b50cf841a64252b439e738e97f4a34e2783",
-                "reference": "81b86b50cf841a64252b439e738e97f4a34e2783",
-                "shasum": ""
+                "reference": "81b86b50cf841a64252b439e738e97f4a34e2783"
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
                     "dev-main": "1.23-dev"
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
-                "source": "https://github.com/symfony/polyfill-intl-grapheme/tree/v1.25.0"
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
-            "time": "2021-11-23T21:10:46+00:00"
+            "description": "Symfony polyfill for intl's grapheme_* functions"
         },
         {
             "name": "symfony/polyfill-intl-normalizer",
             "version": "v1.25.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-intl-normalizer.git",
                 "reference": "8590a5f561694770bdcd3f9b5c69dde6945028e8"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-intl-normalizer/zipball/8590a5f561694770bdcd3f9b5c69dde6945028e8",
-                "reference": "8590a5f561694770bdcd3f9b5c69dde6945028e8",
-                "shasum": ""
+                "reference": "8590a5f561694770bdcd3f9b5c69dde6945028e8"
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
                     "dev-main": "1.23-dev"
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
-                "source": "https://github.com/symfony/polyfill-intl-normalizer/tree/v1.25.0"
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
-            "time": "2021-02-19T12:13:01+00:00"
+            "description": "Symfony polyfill for intl's Normalizer class and related functions"
         },
         {
             "name": "symfony/polyfill-mbstring",
             "version": "v1.25.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-mbstring.git",
                 "reference": "0abb51d2f102e00a4eefcf46ba7fec406d245825"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-mbstring/zipball/0abb51d2f102e00a4eefcf46ba7fec406d245825",
-                "reference": "0abb51d2f102e00a4eefcf46ba7fec406d245825",
-                "shasum": ""
+                "reference": "0abb51d2f102e00a4eefcf46ba7fec406d245825"
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
                     "dev-main": "1.23-dev"
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
-                "source": "https://github.com/symfony/polyfill-mbstring/tree/v1.25.0"
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
-            "time": "2021-11-30T18:21:41+00:00"
+            "description": "Symfony polyfill for the Mbstring extension"
         },
         {
             "name": "symfony/polyfill-php73",
             "version": "v1.25.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-php73.git",
                 "reference": "cc5db0e22b3cb4111010e48785a97f670b350ca5"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-php73/zipball/cc5db0e22b3cb4111010e48785a97f670b350ca5",
-                "reference": "cc5db0e22b3cb4111010e48785a97f670b350ca5",
-                "shasum": ""
+                "reference": "cc5db0e22b3cb4111010e48785a97f670b350ca5"
             },
             "require": {
                 "php": ">=7.1"
             },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.23-dev"
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
-                "source": "https://github.com/symfony/polyfill-php73/tree/v1.25.0"
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
-            "time": "2021-06-05T21:20:04+00:00"
+            "description": "Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions"
         },
         {
             "name": "symfony/polyfill-php80",
             "version": "v1.25.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/polyfill-php80.git",
                 "reference": "4407588e0d3f1f52efb65fbe92babe41f37fe50c"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/polyfill-php80/zipball/4407588e0d3f1f52efb65fbe92babe41f37fe50c",
-                "reference": "4407588e0d3f1f52efb65fbe92babe41f37fe50c",
-                "shasum": ""
+                "reference": "4407588e0d3f1f52efb65fbe92babe41f37fe50c"
             },
             "require": {
                 "php": ">=7.1"
             },
             "type": "library",
             "extra": {
                 "branch-alias": {
                     "dev-main": "1.23-dev"
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
-                "source": "https://github.com/symfony/polyfill-php80/tree/v1.25.0"
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
-            "time": "2022-03-04T08:16:47+00:00"
+            "description": "Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions"
         },
         {
             "name": "symfony/process",
             "version": "v5.4.5",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/process.git",
                 "reference": "95440409896f90a5f85db07a32b517ecec17fa4c"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/process/zipball/95440409896f90a5f85db07a32b517ecec17fa4c",
-                "reference": "95440409896f90a5f85db07a32b517ecec17fa4c",
-                "shasum": ""
+                "reference": "95440409896f90a5f85db07a32b517ecec17fa4c"
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
-                "source": "https://github.com/symfony/process/tree/v5.4.5"
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
-            "time": "2022-01-30T18:16:22+00:00"
+            "description": "Executes commands in sub-processes"
         },
         {
             "name": "symfony/service-contracts",
             "version": "v2.5.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/service-contracts.git",
                 "reference": "1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/service-contracts/zipball/1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc",
-                "reference": "1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc",
-                "shasum": ""
+                "reference": "1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc"
             },
             "require": {
                 "php": ">=7.2.5",
                 "psr/container": "^1.1",
                 "symfony/deprecation-contracts": "^2.1"
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
-                "source": "https://github.com/symfony/service-contracts/tree/v2.5.0"
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
-            "time": "2021-11-04T16:48:04+00:00"
+            "description": "Generic abstractions related to writing services"
         },
         {
             "name": "symfony/string",
             "version": "v5.4.3",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/string.git",
                 "reference": "92043b7d8383e48104e411bc9434b260dbeb5a10"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/string/zipball/92043b7d8383e48104e411bc9434b260dbeb5a10",
-                "reference": "92043b7d8383e48104e411bc9434b260dbeb5a10",
-                "shasum": ""
+                "reference": "92043b7d8383e48104e411bc9434b260dbeb5a10"
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
-                "source": "https://github.com/symfony/string/tree/v5.4.3"
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
+            "description": "Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way"
         }
     ],
     "packages-dev": [
         {
             "name": "phpstan/phpstan",
             "version": "1.5.3",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan.git",
                 "reference": "39953ac1452a8843702ee41a35b4861d3e8207a7"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan/zipball/39953ac1452a8843702ee41a35b4861d3e8207a7",
-                "reference": "39953ac1452a8843702ee41a35b4861d3e8207a7",
-                "shasum": ""
+                "reference": "39953ac1452a8843702ee41a35b4861d3e8207a7"
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
-            "support": {
-                "issues": "https://github.com/phpstan/phpstan/issues",
-                "source": "https://github.com/phpstan/phpstan/tree/1.5.3"
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
-                    "url": "https://www.patreon.com/phpstan",
-                    "type": "patreon"
-                },
-                {
-                    "url": "https://tidelift.com/funding/github/packagist/phpstan/phpstan",
-                    "type": "tidelift"
-                }
-            ],
-            "time": "2022-03-30T21:55:08+00:00"
+            "description": "PHPStan - PHP Static Analysis Tool"
         },
         {
             "name": "phpstan/phpstan-deprecation-rules",
             "version": "1.0.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-deprecation-rules.git",
                 "reference": "e5ccafb0dd8d835dd65d8d7a1a0d2b1b75414682"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-deprecation-rules/zipball/e5ccafb0dd8d835dd65d8d7a1a0d2b1b75414682",
-                "reference": "e5ccafb0dd8d835dd65d8d7a1a0d2b1b75414682",
-                "shasum": ""
+                "reference": "e5ccafb0dd8d835dd65d8d7a1a0d2b1b75414682"
             },
             "require": {
                 "php": "^7.1 || ^8.0",
                 "phpstan/phpstan": "^1.0"
             },
-            "require-dev": {
-                "php-parallel-lint/php-parallel-lint": "^1.2",
-                "phpstan/phpstan-phpunit": "^1.0",
-                "phpunit/phpunit": "^9.5"
-            },
             "type": "phpstan-extension",
             "extra": {
                 "branch-alias": {
                     "dev-master": "1.0-dev"
                 },
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
-                "source": "https://github.com/phpstan/phpstan-deprecation-rules/tree/1.0.0"
-            },
-            "time": "2021-09-23T11:02:21+00:00"
+            "description": "PHPStan rules for detecting usage of deprecated classes, methods, properties, constants and traits."
         },
         {
             "name": "phpstan/phpstan-phpunit",
             "version": "1.1.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-phpunit.git",
                 "reference": "09133ce914f1388a8bb8c7f8573aaa3723cff52a"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-phpunit/zipball/09133ce914f1388a8bb8c7f8573aaa3723cff52a",
-                "reference": "09133ce914f1388a8bb8c7f8573aaa3723cff52a",
-                "shasum": ""
+                "reference": "09133ce914f1388a8bb8c7f8573aaa3723cff52a"
             },
             "require": {
                 "php": "^7.2 || ^8.0",
                 "phpstan/phpstan": "^1.5.0"
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
-                "source": "https://github.com/phpstan/phpstan-phpunit/tree/1.1.0"
-            },
-            "time": "2022-03-28T09:20:49+00:00"
+            "description": "PHPUnit extensions and rules for PHPStan"
         },
         {
             "name": "phpstan/phpstan-strict-rules",
             "version": "1.1.0",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-strict-rules.git",
                 "reference": "e12d55f74a8cca18c6e684c6450767e055ba7717"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-strict-rules/zipball/e12d55f74a8cca18c6e684c6450767e055ba7717",
-                "reference": "e12d55f74a8cca18c6e684c6450767e055ba7717",
-                "shasum": ""
+                "reference": "e12d55f74a8cca18c6e684c6450767e055ba7717"
             },
             "require": {
                 "php": "^7.1 || ^8.0",
                 "phpstan/phpstan": "^1.2.0"
             },
-            "require-dev": {
-                "nikic/php-parser": "^4.13.0",
-                "php-parallel-lint/php-parallel-lint": "^1.2",
-                "phpstan/phpstan-phpunit": "^1.0",
-                "phpunit/phpunit": "^9.5"
-            },
             "type": "phpstan-extension",
             "extra": {
                 "branch-alias": {
                     "dev-master": "1.0-dev"
                 },
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
-                "source": "https://github.com/phpstan/phpstan-strict-rules/tree/1.1.0"
-            },
-            "time": "2021-11-18T09:30:29+00:00"
+            "description": "Extra strict and opinionated rules for PHPStan"
         },
         {
             "name": "phpstan/phpstan-symfony",
             "version": "1.1.8",
             "source": {
                 "type": "git",
                 "url": "https://github.com/phpstan/phpstan-symfony.git",
                 "reference": "4bdffcf1033b6c60662a28419d0192e0dda5684f"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/phpstan/phpstan-symfony/zipball/4bdffcf1033b6c60662a28419d0192e0dda5684f",
-                "reference": "4bdffcf1033b6c60662a28419d0192e0dda5684f",
-                "shasum": ""
+                "reference": "4bdffcf1033b6c60662a28419d0192e0dda5684f"
             },
             "require": {
                 "ext-simplexml": "*",
                 "php": "^7.1 || ^8.0",
                 "phpstan/phpstan": "^1.4"
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
-                "symfony/config": "^4.2 || ^5.0",
-                "symfony/console": "^4.0 || ^5.0",
-                "symfony/dependency-injection": "^4.0 || ^5.0",
-                "symfony/form": "^4.0 || ^5.0",
-                "symfony/framework-bundle": "^4.4 || ^5.0",
-                "symfony/http-foundation": "^5.1",
-                "symfony/messenger": "^4.2 || ^5.0",
-                "symfony/polyfill-php80": "^1.24",
-                "symfony/serializer": "^4.0 || ^5.0"
-            },
             "type": "phpstan-extension",
             "extra": {
                 "branch-alias": {
                     "dev-master": "1.0-dev"
                 },
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
-                "source": "https://github.com/phpstan/phpstan-symfony/tree/1.1.8"
-            },
-            "time": "2022-03-24T07:56:03+00:00"
+            "description": "Symfony Framework extensions and rules for PHPStan"
         },
         {
             "name": "symfony/phpunit-bridge",
             "version": "v6.0.3",
             "source": {
                 "type": "git",
                 "url": "https://github.com/symfony/phpunit-bridge.git",
                 "reference": "81f5e8e453433e0182a49ca45d4734cb3a2f818f"
             },
             "dist": {
                 "type": "zip",
                 "url": "https://api.github.com/repos/symfony/phpunit-bridge/zipball/81f5e8e453433e0182a49ca45d4734cb3a2f818f",
-                "reference": "81f5e8e453433e0182a49ca45d4734cb3a2f818f",
-                "shasum": ""
+                "reference": "81f5e8e453433e0182a49ca45d4734cb3a2f818f"
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
-                "source": "https://github.com/symfony/phpunit-bridge/tree/v6.0.3"
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
-            "time": "2022-01-26T17:23:29+00:00"
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
