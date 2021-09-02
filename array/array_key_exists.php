<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Key Exists In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Key Exists In Php</h1>

	<?php

        $arr = array(

        	"name" => "Rohim",
        	"age" => 28
        );

        if (array_key_exists("name", $arr)) {
        	
        	echo "Array key exists";
        }else{
        	echo "Array ke does not exists";
        }
	?>
</body>
</html>	