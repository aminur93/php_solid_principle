<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Open Close Principle</title>
</head>
<body>
	
	<h1 style="text-align:center;">Open Close Principle</h1>

	<?php 

		interface ShapeInterface{

			public function area():float;

		}

		 class Circle implements ShapeInterface{

         	private $radius;

         	public function __construct($radius){
         		$this->radius = $radius;
         	}

         	public function area():float
         	{
         		return pi() * pow($this->radius, 2);
         	}
         }

         class Square implements ShapeInterface{

         	private $length;

         	public function __construct($length){
         		$this->length = $length;
         	}

         	public function area():float
         	{

         		return  pow($this->length, 2);
         	}
         }

         class AreaCalculator{

     		private $shapes;

     		public function __construct(ShapeInterface ...$shapes){

 				$this->shapes = $shapes;
     		}

     		public function outut(){

     			foreach ($this->shapes as $shape) {
     				
     				echo $shape->area();

     				echo "<br>";

     			}
     		}

         }

         class SumCalculator{

         	private $shapes;

     		public function __construct(ShapeInterface ...$shapes){

 				$this->shapes = $shapes;
     		}

     		public function sum(){

     			$area = [];

     			foreach ($this->shapes as $shape) {
     				
     				$area[] =  $shape->area();

     			}

     			return array_sum($area);
     		}


         }

         $square = new Square(35);

         $circle = new Circle(25);

         echo "Area of Cricle: ". $circle->area();
         echo "<br>";
         echo "Area of square: ". $square->area();
          echo "<br>";

         //$area = new AreaCalculator($square, $circle);
         $sum = new SumCalculator($square, $circle);
         echo "Sum of area: ". $sum->sum();
         
         //$area->outut();


	?>
</body>
</html>