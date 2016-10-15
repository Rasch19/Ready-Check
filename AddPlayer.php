<?php


	$url = $_GET["url"];
	
	
	$g = file_get_contents('urls.json');
	$h = json_decode($g, true);
	$arrlength = count($h);
	for($x = 0; $x < $arrlength; $x++)
	{
		$j = $h[$x];
		if($j["url"] == $url)
		{
			if($j["counter"] < 5)
			{
				$j["counter"] = $j["counter"] + 1;
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