# WordPress Router

This script is WordPress router for [PHP built-in web server](https://www.php.net/manual/en/features.commandline.webserver.php).

This is the equivalent of Apache’s `RewriteRules` in [.htaccess](https://wordpress.org/support/article/htaccess/) file.

## Installation

```shell
$ composer require piotrpress/wordpress-router 
```

## Usage

```shell
$ php -S localhost:80 vendor/piotrpress/wordpress-router/res/rewrite.php
```

## License

[MIT](license.txt)