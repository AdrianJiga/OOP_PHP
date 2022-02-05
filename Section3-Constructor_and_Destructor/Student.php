<?php

class Student{

    public $name;
    public $class;

    function printDetails(){
        echo "Hello from the constructor" . "<br>";
        echo "$this->name is studying $this->class.";
    }
    function __construct($name = "", $class = ""){
        $this->name= $name;
        $this->class = $class;
    }
}

//instance of a class
$stud1 = new Student("John Smith", "Math");
$stud1->printDetails();
