<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Search In Php</title>
</head>
<body>
	
	<h1 style="text-align: center;">Array Search In Php</h1>

	<?php  


		$colors = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

		if (isset($_POST['text'])) {
			

			global $text;

			$text = $_POST['text'];

			$result = array_search($text, $colors);

			echo "You have searched by ". $text . "Your key is ". $result;
		}
	?>

	<form action="array_search.php" method="post">
		
		<input type="text" name="text" value="<?php global $text; echo $text; ?>">
		<input type="submit" value="submit">
	</form>
</body>
</html>		