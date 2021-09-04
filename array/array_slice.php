<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Slice In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Slice In Php</h1>

	<?php 

		$colors = array( "red",  "green",  "blue",  "yellow", "skyblue");

		$result = array_slice($colors, -3,3);

		print("<pre>");

		print_r($result);

		print("</pre>");
	?>
</body>
</html>		