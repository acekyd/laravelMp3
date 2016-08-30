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

    public function test($path)
    {
    	$lib = $this->load($path);
    	return $lib['tags'];
    }

    public function getAlbum($path)
    {
    	$lib = $this->load($path);
	    return $lib['tag']['id3v2']['album'];
    }

    public function getArtist($path)
    {
    	$lib = $this->load($path);
	    return $lib['tag']['id3v2']['artist'];
    }

    public function getBitrate($path)
    {
    	$lib = $this->load($path);
	    return $lib['audio']['bitrate'];
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

    public function getFormat($path)
    {
    	$lib = $this->load($path);
	    return $lib['audio']['dataformat'];
    }

    public function getGenre($path)
    {
    	$lib = $this->load($path);
	    return $lib['tag']['id3v2']['genre'];
    }

    public function isLossless($path)
    {
    	$lib = $this->load($path);
	    return $lib['audio']['lossless'];
    }

    public function getTitle($path)
    {
    	$lib = $this->load($path);
	    return $lib['tag']['id3v2']['title'];
    }

    public function getTrackNo($path)
    {
    	$lib = $this->load($path);
	    return $lib['tag']['id3v2']['track_number'];
    }

    public function getYear($path)
    {
    	$lib = $this->load($path);
	    return $lib['tag']['id3v2']['year'];
    }


}


?>