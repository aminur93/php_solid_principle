<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Interface Segregation Principle</title>
</head>
<body>
	
	<h1 style="text-align:center;">Interface Segregation Principle</h1>

	<?php 

		interface canWalkInterface{

			public function canWalk();
		}

		interface canRunInterface{

			public function canRun();
		}

		interface canFlyInterface{

			public function canFly();
		}

		interface canSwimInterface{

			public function canSwim();
		}



		class Human implements canWalkInterface, canRunInterface{

			public function canWalk(){

				echo "Human can walk";
			}

			public function canRun(){

				echo "Human can run";
			}
		}

		class Fish implements canSwimInterface {

			public function canSwim(){

				return "Fish can swim";
			}
		}

		class Bird implements canFlyInterface{

			public function canFly(){

				return "birds can fly";
			}
		}


		$human = new Human();

		$human->canWalk();
		echo "<br>";
		$human->canRun();
	?>
</body>
</html>