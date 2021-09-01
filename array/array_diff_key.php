<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Diff Key In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Diff Key In Php</h1>

	<?php 


		$array_one = array(

			"a" => "red",
			"b" => "green",
			"c" => "blue",
			"d" => "yellow"
		);

		$array_tow = array(

			"a" => "red",
			"f" => "blue",
			"c" => "pink"

		);

		$differ = array_diff_key($array_one, $array_tow );

		print("<pre>");

		print_r($differ);

		print("</pre>");
	?>
</body>
</html>		