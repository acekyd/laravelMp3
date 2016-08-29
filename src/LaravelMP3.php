<?php

namespace Acekyd\LaravelMP3;

class LaravelMP3
{
	
    public function hello()
    {
    	include('getid3/getid3.php');
    	$getID3 = new \getID3;
    	return $getID3;
        return 'Hello Ace!';
    }
}


?>