<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Classes</title>
</head>
<body>
	<?php 

	// declare a class named Dog
		class Dog {

			// instance variables
			var $legs = 4;
			var $fur = true;

			// bite method
			function bite() {
				echo "I bit you";
			}

			// run method
			function run() {
				echo "I am running!";
			}

		} // end of class definition 

		// instantiate a new Dog
		$bella = new Dog();
		// call the bite method
		$bella->bite();
		// show legs instance variable
		echo $bella->legs;

		// does a method of a class exist?
		if(method_exists($bella, "bite")){
			echo "got it!";
		}

		$classes = get_class_methods('dog');

		print_r($classes);

		// get declared classes
		$declared_classes = get_declared_classes();
		print_r($declared_classes);

		// get the class 
		echo "Bella the dog is based on the " . get_class($bella) . " class";

		// is_a 
		if(is_a($bella,"Dog")){
			echo "bella is in fact a dog";
		}

		// is_subclass_of(object, class_name)

	?>
</body>
</html>