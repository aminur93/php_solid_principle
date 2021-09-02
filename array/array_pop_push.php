<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array pop And Push In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array pop And Push In Php</h1>

	<?php 

		$array = array("red","green");

		$array_one = array(

			"a" => "red",
			"b" => "green",
		);

		//array_pop($array); /*delete last element of array*/

		array_push($array_one, "blue","yellow"); /*new elements insert in array*/

		print("<pre>");

		print_r($array_one);

		print("</pre>");
	?>
</body>
</html>	