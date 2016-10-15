<?php

	function generateRandomString($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		
		for ($i = 0; $i < $length; $i++)
		{
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	
	$players = intval($_POST["players"]);
	$url = generateRandomString();
	$time = time();
	$p = array( "url" => $url, "counter" => 0, "time" => $time, "players" => $players);
	$g = file_get_contents('urls.json');
	$h = json_decode($g);
	$user_input = array();
	if ($h != null)
		$user_input = $h;
	
	array_push($user_input, $p);
	$json_string = json_encode($user_input);
	
	file_put_contents('urls.json', $json_string );
	
	$newURL = "Check.php?url=$url";
	
	header('Location: '.$newURL);
	die();
	
	  
?>