<?php

class Person {
	function say_hello(){
		echo "Hello from inside a class" . "<br />";
	}
}

$person = new Person();
$person2 = new Person();

echo get_class($person) . "<br />";

if(is_a($person, "Person")){
	echo "Yeap it's a person" . "<br />";
} else {
	echo "Not a person" . "<br />";
}

$person->say_hello();

?>