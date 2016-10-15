<?php


	$url = $_GET["url"];
	
	
	$g = file_get_contents('urls.json');
	$h = json_decode($g, true);
	$arrlength = count($h);
	//print_r($h);
	//print_r($j);
	//$k = json_decode($j, true);
	//print_r($k);
	for($x = 0; $x < $arrlength; $x++)
	{
		$j = $h[$x];
		if($j["url"] == $url)
		{
			if($j["counter"] > 0)
			{
				$j["counter"] = $j["counter"] - 1;
				$h[$x] = $j;
			}
			break;
		}
	}
	$json_string = json_encode($h);
	
	file_put_contents('urls.json', $json_string);
	
	$newURL = "Check.php?url=$url";
	
	header('Location: '.$newURL);
	die();
	
	  
?>