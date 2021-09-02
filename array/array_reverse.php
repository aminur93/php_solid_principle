<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Reverse In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Reverse in php</h1>

	<?php  

		$color_one = array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"blue");

		$result = array_reverse($color_one);

		print("<pre>");

		print_r($color_one);

		print("</pre>");



		print("<pre>");

		print_r($result);

		print("</pre>");
	?>
</body>
</html>	