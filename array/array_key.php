<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Keys In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Keys In Php</h1>

	<?php 

	$array = array(

		"Volvo" => "Xc15",
		"Bmw" => "x5",
		"Toyota" => "Premio"
	);

	$result = array_keys($array, "x5");

	print("<pre>");

	print_r($result);

	print("</pre>");

	?>
</body>
</html>		