<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Walk in Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Walk In Php</h1>

	<?php 


		function myfunction($department, $name)
		{
			echo "$name come from $department from department <br>";
		}

		$name = array(

			"Mamun" => "MBBS",
			"sumon" => "Engineering",
			"Pavel" => "Business"
		);

		array_walk($name, "myfunction");

		// print("<pre>");

		// print_r($name);

		// print("</pre>");
	?>
</body>
</html>	