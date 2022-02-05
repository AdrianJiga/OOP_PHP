<?php

class Car {
    public $name;
    public $color;

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

$sportsCar = new Car();
$sportsCar->setName("Ferrari");
$sportsCar->setColor("Red");

$modernCar = new Car();
$modernCar->setName("BMW");
$modernCar->setColor("Blue");

$budgetCar = new Car();
$budgetCar->setName("Hyundai");
$budgetCar->setColor("Black");

echo "$sportsCar->name is $sportsCar->color" . "<br>";
echo "$modernCar->name is $modernCar->color" . "<br>";
echo "$budgetCar->name is $budgetCar->color" . "<br>";

