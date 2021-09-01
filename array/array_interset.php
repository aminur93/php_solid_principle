<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Interset In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array interset in Php</h1>

	<?php


		$array_one = array(

			"a" => "red",
			"b" => "green",
			"c" => "blue",
			"d" => "yellow"
		);

		$array_tow = array(

			"e" => "red",
			"f" => "green",
			"g" => "purple"

		);

		$array_three = array(

			"a" => "red",
			"b" => "green",
			"h" => "yellow"

		);

		$result = array_intersect($array_one, $array_tow, $array_three);

		print("<pre>");

		print_r($result);

		print("</pre>");
	?>
</body>
</html>	