<?php

class Fruit {

    ////public - the property or method can be accessed from everywhere. This is default
    public $name;
    ////protected - the property or method can be accessed within the class and by classes derived from that class
    protected $color;
    ////private - the property or method can ONLY be accessed within the class
    private $weight;

}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
