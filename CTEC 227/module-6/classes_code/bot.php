<?php

class Bot 
{

    private $health;

    function __construct($id) 
    {
        $this->id = $id;
        $this->health = 0;
    }

    function setHealth($score) 
    {
        // set health of this particular bot
        $this->health = $this->health + $score;
    }

    function getHealth() 
    {
        // return health of this particular bot
        return $this->health;
    }
}

$botArmy = [];

for ($i=0; $i < 1000; $i++) { 
    $botArmy[$i] = new Bot($i);
    // add 50 health to each bot
    $botArmy[$i]->setHealth(random_int(0, 100));
}

for ($i=0; $i < 1000; $i++) { 
    echo $botArmy[$i]->getHealth() . "<br>";
}