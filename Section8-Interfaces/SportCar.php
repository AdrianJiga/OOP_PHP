<?php

require_once "Car.php";

class SportsCar implements Car {


    public function applyBreak(){
        echo "Applying brake. <br>";
    }

    public function increaseTheSpeed(){
        echo "Increasing the speed. <br>";
    }

    public function decreaseTheSpeed(){
        echo "Decreasing the speed. <br>";
    }
}