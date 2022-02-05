<?php

class Car{

    public $name = "";

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}

$car1 = new Car();
$car1->setName("Johnny Bravo");
echo $car1->getName() . "<br>";

$car1->name = "Ferrari";
echo $car1->getName() . "<br>";

$car2 = new Car();
$car1->setName("Opel");
echo $car1->getName() . "<br>";
echo $car2->getName() . "<br>";