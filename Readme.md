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

## Usage

Laravel MP3 requires you to pass only one argument which is the filepath. Can be done during or after upload.
Use it in your controllers to get the data you might need.

Add it to your controller if needed
``` php
	use LaravelMP3;
```

``` php
	$file = $request->file('music');
	$details = LaravelMP3::getBitrate($file); //This returns the bitrate of the music file

```

## Functions
* getAlbum($path)		//This returns the Album name
* getArtist($path)		//This returns the Artist name
* getBitrate($path) 	//This returns the bitrate
* getDuration($path)	//This returns the playtime duration of the mp3 e.g 00:03:45
* getFormat($path)		//This returns the file format e.g mp3
* getGenre($path)		//This returns the audio genre
* getMime($path)		//This returns the mime type e.d "audio/mpeg"
* getTitle($path)		//This returns the Title/Name of audio file
* getTrackNo($path)		//This returns the Album track no of an audio file
* getYear($path)		//This returns the Album year of an audio file
* isLossless($path)		//This returns true or false if the audio file is lossless

## Credits

- [Abati 'AceKYD' Adewale](https://twitter.com/ace_kyd)

## License

The GPL License.