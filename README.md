Evan Skeleton
=============

*Minimal PHP application structure*

What is this
------------

**Skeleton** is a minimal framework-like file structure for a small/medium PHP
application. It uses a collection of libraries:

* [Slim](http://slimframework.com/) microframework (with
  [Views](http://github.com/codeguy/Slim-Views) and
  [Extras](http://github.com/codeguy/Slim-Extras));
* [Twig](http://twig.sensiolabs.org/) template engine;
* [Idiorm/Paris](http://j4mie.github.io/idiormandparis/) active record;
* [jQuery](http://jquery.com/) and
  [Twitter Bootstrap](http://getbootstrap.com/).

It also use some tools for development and deployment:

* [PHPUnit](http://phpunit.de/);
* [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer).
How to install
--------------

Currently, you should use `git` and `composer`:

```sh
$ git clone http://github.com/tassoevan/skeleton.git /path/to/app
$ composer --working-dir=/path/to/app update
```

This will install all libraries and tools.

How to configure
----------------

There are two main directories: `public` and `private`. `public` is the public
www folder that must be served via HTTP server, while `private` contains the
application source, logs, cache and configuration files. If you want to put them
in different locations, just rewrite the autoloader path in `public/index.php`.

How to use
----------

This project is in development. When it reaches minimal required features (like
MVC support and deployment), it will be tagged and properly versionated. For
now, this structure should be treated as *experimental* and subject to major
changes.
