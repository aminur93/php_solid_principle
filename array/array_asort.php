<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array asort In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array asort In Php</h1>

	<?php  


		$num = array(

			"Mamun" => "45",
			"sumon" => "23",
			"Pavel" => "35",
			"Kobir" => "90",
			"Hasan" => "12"

		);

		arsort($num);

		//asort($num);


		foreach($num as $name=>$age){

			echo "Name : ".$name. ", Age : ".$age."<br>";
		}

	?>
</body>
</html>			