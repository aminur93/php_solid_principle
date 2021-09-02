<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Map in Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Map In Php</h1>

	<?php 

			function myfunction($value)
			{
				$v = strtoupper($value);

				return $v;
			}

			$arr = array(

				"Animal" => "cow",
				"Type" => "mamal"
			);

			$result = array_map("myfunction", $arr);

			print("<pre>");

			print_r($result);

			print("</pre>");
			?>
</body>
</html>