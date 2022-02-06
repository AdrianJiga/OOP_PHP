<?php

class Car{

    private $name;
    private $year;
    private $speed;

    public function __construct($name, $year, $speed){
        $this->name = $name;
        $this->year = $year;
        $this->speed = $speed;
    }

    public function getName() {
        return $this->name;
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function getYear()
    {
        return $this->year;
    }

    function increaseSpeed($amount){
        $this->speed = $this->speed + $amount;
    }

    function decreaseSpeed($amount){
        if ($this->speed <= 0) {
            echo "Car is already stopped. " . "<br>";
        } elseif ($this->speed <= $amount) {
            echo "The amount of speed you are trying to reduce is greater than your actual speed." . "<br>";
        }
        $this->speed = $this->speed - $amount;
    }
}

$car1 = new Car("BMW", 2012, 100);
$car1->increaseSpeed(45);
$car1->decreaseSpeed(22);
echo "The " . $car1->getName() . " car from " . $car1->getYear() . " is running at a speed of " . $car1->getSpeed() . " km/h <br>";

$car1 = new Car("Honda", 2008, 45);
$car1->increaseSpeed(22);
$car1->decreaseSpeed(100);
echo "The " . $car1->getName() . " car from " . $car1->getYear() . " is running at a speed of " . $car1->getSpeed() . " km/h";