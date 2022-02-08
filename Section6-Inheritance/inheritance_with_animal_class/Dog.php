<?php

require_once "Animal.php";

class Dog extends Animal {

    public function __construct($name, $isHunting)
    {
        parent::__construct($name, $isHunting);
    }

    function makeSound()
    {
        echo "Woof-Woof! Dog class <br>";
    }
}

$dog1 = new Dog("Rex", TRUE);
$dog1->makeSound();
$dog1->doesHunting();

$dog2 = new Dog("Luffy", False);
$dog2->makeSound();
$dog2->doesHunting();
