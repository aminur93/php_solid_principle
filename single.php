<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Single Responsibility Principle</title>
</head>
<body>
	
	<h1 style="text-align: center;">Single Responsibility Principle</h1>

	<?php 
         

         class Circle{

         	private $radius;

         	public function setRadius($radius){
         		$this->radius = $radius;
         	}

         	public function getArea()
         	{
         		return "Area of Cricle: ". pi() * pow($this->radius, 2);
         	}
         }

         class Square{

         	private $length;

         	public function setLength($length){
         		$this->length = $length;
         	}

         	public function getArea(){

         		return "Area of square: ". pow($this->length, 2);
         	}
         }

         class AreaCalculator{

     		private $shapes;

     		public function __construct(...$shapes){

 				$this->shapes = $shapes;
     		}

     		public function outut(){

     			foreach ($this->shapes as $shape) {
     				
     				echo $shape->getArea();

     				echo "<br>";

     			}
     		}

         }


         $circle = new Circle();

         $square = new Square();

       
         $circle->setRadius(25);

         $square->setLength(30);

         $area = new AreaCalculator($circle, $square);

         $area->outut();
	?>
</body>
</html>