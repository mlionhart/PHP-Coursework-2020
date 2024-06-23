<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Classes</title>
</head>
<body>
	<?php 
		class Dog {
			// Properties
			var $legs = 4;
			var $fur = true;
			var $eyes = 2;
			// Methods
			function run(){
				echo "Our dog is now running...<br>";
			}
			function bark(){
				echo "Our dog just barked...<br>";
			}
		}

		$fido = new Dog();
		echo "Fido has: " . $fido->legs . " legs.<br>";
		$fido->run();
		$george = new Dog();
		echo "George has: " . $george->legs . " legs.<br>";
		echo "George has: " . $george->eyes . " eyes.<br>";
		$george->run();
		$george->bark();

		// does a method of a class exist?
		// if(method_exists($fido, "poop")){
		// 	echo "got it!<br>";
		// } else {
		// 	echo "I dodn't have that method";
		// }

		// $classes = get_class_methods('dog');

		// echo "<pre>";
		// print_r($classes);
		// echo "</pre>";

		// get declared classes
		// $declared_classes = get_declared_classes();
		// echo "<pre>";
		// print_r($declared_classes);
		// echo "</pre>";

		// get the class 
		// echo "Fido the dog is based on the " . get_class($fido) . " class";

		// is_a 
		// if(is_a($fido,"dog")){
		// 	echo "Fido is in fact a dog";
		// }

		// echo is_subclass_of($fido, 'dog');

	?>
</body>
</html>