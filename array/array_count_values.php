<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Count values In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Count values In Php</h1>

	<?php 

        $name = array(

	        "Akbor", 
	        "Mamun", 
	        "Aminur",
	        "Mamun",
	        "Mamun",
	        "Mamun",
	        "Mamun",
	        "Mamun",
	        "Aminur",
	        "Aminur"
        );

        $age = array("28", "29", "20", "20", "20", "20", "20", "20", "29", "29", "29", "29");


        print("<pre>");

		print_r(array_count_values($age));

		print("</pre>");
	?>
</body>
</html>