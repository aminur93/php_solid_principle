<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Column in php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Column</h1>

	<?php 

		$name = array(

				array("Id" => 200, "first_name" => "Aminur", "last_name" => "Rashid"),
				array("Id" => 201, "first_name" => "Khan", "last_name" => "Ahmed"),
				array("Id" => 202, "first_name" => "Latif", "last_name" => "Khan")
		);

		$lastname = array_column($name, 'last_name');

		$firstname = array_column($name, 'first_name', 'Id');

		print("<pre>");

		print_r($firstname);

		print("</pre>");

	?>
</body>
</html>