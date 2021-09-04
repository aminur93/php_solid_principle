<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Sum In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Sum In Php</h1>

	<?php 

		$array = array(

			"a" => "50",
			"b" => "10",
			"c" => "20"
		);

		$result = array_sum($array);

		echo "The result : ". $result;
	?>
</body>
</html>