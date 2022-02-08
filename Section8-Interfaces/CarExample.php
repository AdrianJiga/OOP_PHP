<?php

require_once "Car.php";
require_once "SportCar.php";
require_once "CarModel.php";

$car1 = new SportsCar();
$car1->setModel("Ferrari");
echo "the model is " . $car1->getModel() . "<br>";
$car1->increaseTheSpeed();
$car1->decreaseTheSpeed();
$car1->applyBreak();