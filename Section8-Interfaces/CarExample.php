<?php

require_once "Car.php";
require_once "SportCar.php";

$car1 = new SportsCar();
$car1->increaseTheSpeed();
$car1->decreaseTheSpeed();
$car1->applyBreak();