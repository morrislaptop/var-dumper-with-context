VarDumper Component with Context
================================

Using this will show the file and line number which called the dump function. Very handy if you've forgotten where you put that pesky call, especially deep inside the `vendor` directory. 

Installation
------------

    composer require symfony/var-dumper --dev && composer require morrislaptop/var-dumper-with-context --dev

Usage
-----

That's it! Simply call `dump()` as you normally would and the file and line number will appear. 

Laravel Note
-----
Laravel 5.7 ships with `beyondcode/laravel-dump-server` which will disable this extension. To enable this extension again, simply add the below to your application's `composer.json` and run `php artisan package:discover` again.

```
    "extra": {
        "laravel": {
            "dont-discover": [
                "beyondcode/laravel-dump-server"
            ]
        }
    },
```

Resources
---------

* [Symfony VarDumper](https://symfony.com/doc/current/components/var_dumper/introduction.html)
