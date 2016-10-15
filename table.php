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
			$z = $j["players"];
			$size = 500/$z;
			for($y = 1; $y <= $z; $y++)
			{
				print("<th><img id='play$y' alt='$y player' src='img/unready.png' height='100' width='100'></img></th>");
			}
			break;
		}
	}
	
?>