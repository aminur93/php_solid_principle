<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Unique In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array unique In Php</h1>

	<?php 

		$colors = array(

			"a" => "red",
			"b" => "green",
			"c" => "blue",
			"d" => "purple",
			"e" => "green",
			"f" => "red",
			"g" => "blue"
		);

		$result = array_unique($colors);

		print("<pre>");

		print_r($result);

		print("</pre>");
	?>
</body>
</html>	