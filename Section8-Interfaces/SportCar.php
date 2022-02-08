<?php

require_once "Car.php";
require_once "CarModel.php";

class SportsCar implements Car, CarModel {

    private $model;

    public function applyBreak(){
        echo "Applying brake. <br>";
    }

    public function increaseTheSpeed(){
        echo "Increasing the speed. <br>";
    }

    public function decreaseTheSpeed(){
        echo "Decreasing the speed. <br>";
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }
}