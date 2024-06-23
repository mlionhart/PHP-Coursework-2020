<?php

class Person {
	function say_hello(){
		echo "Hello from inside a class" . "<br />";
	}
}

$methods = get_class_methods("Person");

foreach($methods as $method){
	echo $method . "<br />";
}

if(method_exists("Person", "say_hello")){
	echo "That method exists" . "<br />";
} else {
	echo "That method does not exist" . "<br />";
}

?>