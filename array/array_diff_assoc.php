<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Diff Assoc In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Diff Assoc In php</h1>

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
			"g" => "blue"

		);


		$array_three = array(

			"h" => "red",
			"b" => "green",
			"g" => "blue"

		);

		$differ = array_diff_assoc($array_one, $array_tow, $array_three);

		print("<pre>");

		print_r($differ);

		print("</pre>");

	?>
</body>
</html>				