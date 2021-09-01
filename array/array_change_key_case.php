<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Change Keys In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Change Keys In Php</h1>

	<?php  

		$name = array(

			'jaman' => 35,
			'Kader' => 33,
			'Mamun' => 20,
			'Akbor' => 23,
		);

		print("<pre>");
		print_r(array_change_key_case($name, CASE_LOWER));
		print("</pre>");
	?>
</body>
</html>