<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Shift In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Shift In Php</h1>

	<?php  

		$colors = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

		array_shift($colors);

		print("<pre>");

		print_r($colors);

		print("</pre>");
	?>
</body>
</html>		