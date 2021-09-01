<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dependency Inversion Principle</title>
</head>
<body>
	
	<h1 style="text-align: center;">Dependency Inversion Principle</h1>

	<?php 

		//Dependency injection example

		// class Paypal{

		// 	public function process(){

		// 		return "payment completed.....";
		// 	}
		// }

		// class Payment{

		// 	private $payment;

		// 	public function __construct(Paypal $payment){

		// 		$this->payment = $payment;
		// 	}

		// 	public function process(){

		// 		return $this->payment->process();
		// 	}
		// }

		// $paypal = new Paypal();
		// $payment = new Payment($paypal);

		// echo $payment->process();


		//Dependency inversion example

		abstract class Payment{

			abstract public function process();

			public function done(){

				return "DONE";
			}
		}

		class Paypal extends Payment{

			public function process(){

				return "Paypal payment completed ....";

			}
		}

		class Creditcard extends Payment{

			public function process(){


				return "Credit card payment completed ...";
				
			}

		}

		class Newpayment {

			private $payment;

			public function __construct(Payment $payment){

				$this->payment = $payment;
			}

			public function process(){

				echo  $this->payment->process();
				echo $this->payment->done();
			}
		}

		$paypal = new Paypal();
		$creditcard = new Creditcard();

		$newpayment = new Newpayment($creditcard);

		$newpayment->process();

	?>
</body>
</html>