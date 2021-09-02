<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array MultiSort In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array MultiSort In Php</h1>

	<?php  


		$arr_one = array("Dog","Cat");

		$arr_tow = array("Lion","Tiger");

		array_multisort($arr_one,SORT_DESC,  $arr_tow,SORT_ASC);


		print("<pre>");

		print_r($arr_one);

		print("</pre>");


		print("<pre>");

		print_r($arr_tow);

		print("</pre>");
	?>
</body>
</html>	