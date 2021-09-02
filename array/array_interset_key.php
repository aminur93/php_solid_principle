<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Interset Key In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Interset Key In Php</h1>

	<?php

		$array_one = array(

			"a" => "red",
			"b" => "green",
			"c" => "blue",
			"d" => "yellow"
		);

		$array_tow = array(

			"a" => "red",
			"b" => "green",
			"c" => "blue",
			"d" => "yellow"

		);

		$array_three = array(

			"a" => "red",
			"b" => "green",
			"g" => "blue",
			"d" => "yellow"

		);


		$result = array_intersect_key($array_one, $array_tow, $array_three);

		print("<pre>");

		print_r($result);

		print("</pre>");
	?>
</body>
</html>	