<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liskov Subsitution Principle</title>
</head>
<body>
	
	<h1 style="text-align:center;">Liskov Subsitution Principle</h1>

	<?php 

		abstract class Animal{

			protected $legs;

			abstract public function legs($legs);
			abstract public function fly();

			public function getLags(){

				return $this->legs;
			}
		}

		class Dog extends Animal{

			public function legs($legs){

				$this->legs = $legs;
			}

			public function fly(){
				return false;
			}

		}

		class Human extends Animal{

			public function legs($legs){

				$this->legs = $legs;
			}

			public function fly(){
				return false;
			}
		}

		class Bird extends Animal{

			public function legs($legs){

				$this->legs = $legs;
			}

			public function fly(){
				return true;
			}
		}

		class Printout{

			private $animals;

			public function __construct(Animal ...$animals){
				$this->animals = $animals;
			}

			public function output(){

				foreach($this->animals as $animal){

					$fly = $animal->fly() ? ' and can cly' : ' and can not fly';

					echo "The ". get_class($animal). " has ". $animal->getLags() . " legs " . $fly;
					echo "<br>";
				}

				
			}
		} 

		$dog = new Dog();
		$dog->legs(4);

		$human = new Human();
		$human->legs(2);

		$bird = new Bird();
		$bird->legs(2);

		$printout = new Printout($dog, $human, $bird);
		$printout->output();

	?>
</body>
</html>