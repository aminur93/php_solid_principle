<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Diff In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Diff In Php</h1>

	<?php

		$array_one = array(


			"a" => "red",
			"b" => "greeen",
			"c" => "blue",
			"d" => "yellow"
		);

		$array_tow = array(

			"e" => "red",
			"f" => "black",
			"g" => "purple",

		);

		$array_three = array(

			"a" => "red",
			"b" => "black",
			"h" => "yellow"

		);

		$differ = array_diff($array_one, $array_tow, $array_three);
          

		print("<pre>");

		print_r($differ);

		print("</pre>");

 
	?>
</body>
</html>