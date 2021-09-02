<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Pad in Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Pad In Php</h1>

	<?php  

		$arr_one = array("Red","Green","Blue");

		$result = array_pad($arr_one, 4, "yellow");

		print("<pre>");

		print_r($result);

		print("</pre>");
	?>
</body>
</html>		