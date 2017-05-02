<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Checking...</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="img/ready.png">
	</head>
	<body>
		<?php
			include 'header.php'
		?>
		<p id="p1" style="visibility: hidden;">0</p>
		
		<table id="table" align="center">
			<tr>
				
				<?php
				include 'table.php'
				?>
			</tr>
		</table>
		
		
		<table id="knappar" align="center">
			<tr>
				<th><a class="button" id="Add">Ready</a></th>
				<th><a class="button" id="copy">Copy URL</a></th>
			</tr>
		</table>
		
		
		<script type="text/javascript" src="js/MyScript.js"></script>
		<script type="text/javascript" src="js/AddPlayer.js"></script>
		<script type="text/javascript" src="js/ready.js"></script>
		<script type="text/javascript" src="js/copy.js"></script>
		<script type="text/javascript" src="js/loaded.js"></script>
		<script type="text/javascript" src="clipboard.js-master/clipboard.js"></script>
		<script type="text/javascript" src="clipboard.js-master/clipboard.min.js"></script>
	</body>

	
	
	
	
	
</html>