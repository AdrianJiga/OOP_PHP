<?php

abstract class Car{

    abstract function applyBreak();

    function hello(){
        echo "Hello from the Car class <br>";
    }
}

class SportsCar extends Car{

    function applyBreak()
    {
        echo "Applying Break <br>";
    }
}

$car1 = new SportsCar();
$car1->applyBreak();
$car1->hello();

