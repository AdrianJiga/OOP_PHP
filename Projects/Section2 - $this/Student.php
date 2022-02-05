<?php

class Student{

    public $name;
    public $class;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class): void
    {
        $this->class = $class;
    }

    function printDetails(){
        echo "The student called " . $this->getName() . " is in the " . $this->getClass() . " class";
    }
}

$student1 = new Student();
$student1->setName("Wonderful Lockstar");
$student1->setClass("Statistics");
$student1->printDetails();