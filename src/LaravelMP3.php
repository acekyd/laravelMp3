<?php

namespace Acekyd\LaravelMP3;

class LaravelMP3
{

	public function load($path = null)
	{
		include('getid3/getid3.php');
		$getID3 = new \getID3;
		$info = $getID3->analyze( $path );
		if(!isset($info['audio']))
	    {
	        return $info;
	    }
		return $info['audio'];
	}

    public function hello()
    {
    	$lib = $this->load();
    	return $lib;
    }

    public function getBitrate($path)
    {
    	$lib = $this->load($path);
	    return $lib['bitrate'];
    }

    public function getFormat($path)
    {
    	$lib = $this->load($path);
	    return $lib['dataformat'];
    }
}


?>