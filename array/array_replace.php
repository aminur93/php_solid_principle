<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Replace in Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array replace in php</h1>

	<?php  

		$color_one = array("a"=>"red","b"=>"green");

		$color_tow = array("a"=>"blue","yellow");

		$result = array_replace($color_one, $color_tow);

		print("<pre>");

		print_r($result);

		print("</pre>");
	?>
</body>
</html>	