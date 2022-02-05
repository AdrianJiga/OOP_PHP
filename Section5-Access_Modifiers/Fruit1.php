<?php

class Fruit1 {

    private $name;
    private $color;
    private $weight;

    function set_name($name) {
        $this->name = $name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function set_weight($weight) {
        $this->weight = $weight;
    }

    function getColor() {
        return $this->color;
    }

    function getName() {
        return $this->name;
    }

    function getWeight() {
        return $this->weight;
    }
}

$mango = new Fruit1();

$mango->set_name('Mango');
$mango->set_color('Yellow');
$mango->set_weight('300');

echo "The fruit is " . $mango->getName() . ". It has a " . $mango->getColor() . " color and its weight is " . $mango->getWeight();

