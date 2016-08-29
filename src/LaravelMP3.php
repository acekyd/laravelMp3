<?php

namespace Acekyd\LaravelMP3;

class LaravelMP3
{

	public function load($path = null)
	{
		include('getid3/getid3.php');
		$getID3 = new \getID3;
		$info = $getID3->analyze( $path );
	    return $info;
	}

    public function hello()
    {
    	$lib = $this->load();
    	return $lib;
    }

    public function getBitrate($path)
    {
    	$lib = $this->load($path);
	    return $lib['audio']['bitrate'];
    }

    public function getFormat($path)
    {
    	$lib = $this->load($path);
	    return $lib['audio']['dataformat'];
    }

    public function getDuration($path)
    {
    	$lib = $this->load($path);
	    $play_time = $lib['playtime_string'];
	    $hours = 0;
	    list($mins , $secs) = explode(':' , $play_time);

	    if($mins > 60)
	    {
	        $hours = intval($mins / 60);
          	$mins = $mins - $hours*60;
	    }
	    if($hours)
	    {
	        $play_time = sprintf("%02d:%02d:%02d" , $hours , $mins , $secs);
	    }
	    else $play_time = sprintf("%02d:%02d" , $mins , $secs);

	    return $play_time;
    }
}


?>