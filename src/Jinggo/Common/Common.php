<?php namespace Jinggo\Common;

class Common {

	public static function youtube_parse($url) 
	{
	    $pattern = '#^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com(?:/embed/|/v/|/watch\?v=|/watch\?.+&v=))([\w-]{11})(?:.+)?$#x';
	    preg_match($pattern, $url, $matches);
	    return (isset($matches[1])) ? $matches[1] : false;
	}
}