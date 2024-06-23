<?php

class Dog {
    // public - everyone inside and outside fo the class
    // private - only the class
    // protected - the class and subclass

    private $name;

    function __construct($legs, $fur, $name) 
    {
        $this->legs = $legs;
        $this->fur = $fur;
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function run()
    {
        return "Our dog is running and has $this->legs legs";
    }
}

$mike = new Dog(5, true, "Mike");
echo "mike the dog has" . $mike->legs . " legs.";
echo "<br>";
echo "mike the dog has" . $mike->fur . " fur.";
echo "<br>";
echo $mike->run();
echo "<br>";
echo $mike->getName();
$mike->setName('George');
echo "<br>";
echo $mike->getName();
