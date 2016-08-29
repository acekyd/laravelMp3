<?php

// src/DemoFacade.php

namespace Acekyd\LaravelMP3;

use Illuminate\Support\Facades\Facade;

class LaravelMP3Facade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'acekyd-laravelmp3';
    }
}

?>