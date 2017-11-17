# PHPUnit

## What's the point?

PHPUnit fails with segmentation fault on PHP 5.5.9-1ubuntu4.22 in Docker container.

## What's the problem?

This error comes from PHP Output Control Functions(ob_*).

## What's the solution?

I removed them from 4.8 branch(last version of phpunit for php 5.5.9).

Basicly we can upgrade php, but in corporate we can't use other repos with ubuntu binaries and our ops do not want to support  php 5.6.

## Installation

```bash
$ git clone -b 4.8 https://github.com/alexartwww/phpunit.git
$ cd phpunit
$ composer.phar update
$ ant phar
$ mv ./build/phpunit-<build-number>.phar /usr/local/bin/phpunit
```
Of course you need to be sure that composer installed(https://getcomposer.org/download/) and Apache Ant (sudo apt-get install ant).

You awesome!
