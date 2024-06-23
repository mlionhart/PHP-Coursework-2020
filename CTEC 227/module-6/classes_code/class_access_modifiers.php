<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Classes - Access Modifiers</title>
</head>
<body>
	<?php 
	
	// Access Modifiers

	// public - Everywhere
	// private - This class only
	// protected - This class and subclasses of this class

	class Example {

		public $a = 1;
		protected $b = 2;
		private $c = 3;

		function show_abc(){
			echo $this->a . "<br>";
			echo $this->b . "<br>";
			echo $this->c . "<br>";
		} // end of method

		public function hello_everyone(){
			return "Hello Everyone!<br>";
		}

		protected function hello_family(){
			return "Hello Family!<br>";
		}

		private function hello_me(){
			return "Hello Me!";
		}

		// public by default
		function hello(){
			$output = $this->hello_everyone();
			$output .= $this->hello_family();
			$output .= $this->hello_me();
			return $output;
		}

	} // end of class

	$example = new Example();

	echo "public a: {$example->a}<br>";
	// echo "protected b: {$example->b}<br>";
	// echo "private c: {$example->c}<br>";
	// echo $example->show_abc();

	class SmallExample extends Example {

	}

	$smallexample = new SmallExample();
	echo "<br>";
	// echo $smallexample->c;
	echo "hello everyone: {$example->hello()}<br>";

	 ?>
</body>
</html>