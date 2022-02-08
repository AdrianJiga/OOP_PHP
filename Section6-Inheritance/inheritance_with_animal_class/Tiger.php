<?php

require_once "Animal.php";

class Tiger extends Animal{

    public function __construct($name, $isHunting)
    {
        parent::__construct($name, $isHunting);
    }

    function makeSound()
    {
        echo "Growl-Growl! Tiger class <br>";
    }
}

$tiger1 = new Tiger("Killer Sting", TRUE);
$tiger1->makeSound();
$tiger1->doesHunting();

$tiger2 = new Tiger("Chill Tiger", FALSE);
$tiger2->makeSound();
$tiger2->doesHunting();

