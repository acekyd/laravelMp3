# LaravelMP3

> Laravel Package to help you work with mp3 files easily. Simple yet powerful. Built on the getID3

## Install

[PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

Via Composer

``` bash
$ composer require acekyd/laravelmp3
```

Another alternative is to simply add the following line to the require block of your `composer.json` file.

```
"acekyd/laravelmp3": "1.*"
```

Then run `composer install` or `composer update` to download it and have the autoloader updated.

Add this to your providers array in `config/app.php`

```php

// Laravel 5.2: config/app.php

'providers' => [
    ...
    Acekyd\LaravelMP3\LaravelMP3ServiceProvider::class,
    ...
];
```

This package also comes with a facade

```php

// Laravel 5: config/app.php

'aliases' => [
    ...
    'LaravelMP3' => Acekyd\LaravelMP3\LaravelMP3Facade::class,
    ...
]
```