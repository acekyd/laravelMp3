<?php

// src/DemoServiceProvider.php

namespace Acekyd\LaravelMP3;

use Illuminate\Support\ServiceProvider;

class LaravelMP3ServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('acekyd-laravelmp3', function() {
            return new LaravelMP3;
        });
    }
}


?>