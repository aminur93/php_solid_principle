<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Combine In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Combine In Php</h1>

	<?php 

        $name = array("Akbor", "Mamun", "Aminur");
        $department = array("Computer Science", "Maths", "Physics");

        $combine = array_combine($name, $department);

        print("<pre>");

		print_r($combine);

		print("</pre>");
	?>
</body>
</html>