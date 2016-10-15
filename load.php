<?php

	$url = $_GET["url"];
	$url_g = file_get_contents('urls.json');
	$url_h = json_decode($url_g, true);
	$url_h_length = count($url_h);
	$url_input = array();
	$time = time();
	
	for($u = 0; $u < $url_h_length; $u++)
	{
		$k = $url_h[$u];
		$url_time = $k["time"];
		if($k["url"] == $url)
		{
			$k["time"] = $time;
		}
		if(($time - $url_time) < (24*60*60) )
		{
			array_push($url_input, $k);
		}
	}
	
	$url_json = json_encode($url_input);
	file_put_contents('urls.json', $url_json);
	
	
	
	
?>