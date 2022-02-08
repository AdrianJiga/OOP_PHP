<?php

require_once "Father.php";

class Son extends Father {

    public $name;

    function __construct($name, Father $father)
    {
        $this->name = $name;

        $this->beardcolor = $father->beardcolor;
        $this->eyecolor = $father->eyecolor;
    }

    function printSonDetails()
    {
        echo "Son's name is $this->name <br>";
    }
}


$father = new Father('Black', 'Green');
$son = new Son('John', $father);

echo $father->printFathersDetail()."<br>";
echo "-------------------------------------<br>";
echo $son->printSonDetails()."<br>";
echo $son->printFathersDetail()."<br>";
