<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Compact In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Compact in Php</h1>

	<?php  

		$name = "Aminur";

		$dep = "SWE";

		$code = "Php";

		$result = compact("name", "dep", "code");

		print("<pre>");

		print_r($result);

		print("</pre>");
	?>
</body>
</html>