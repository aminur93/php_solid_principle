<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Merage In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Merage In Php</h1>

	<?php 


		$array_one = array(

			"a" => "red",
			"b" => "green"
		);

		$array_tow = array(

			"c" => "blue",
			"b" => "yellow"
		);

		$result = array_merge($array_one, $array_tow);

		print("<pre>");

		print_r($result);

		print("</pre>");
	?>
</body>
</html>	