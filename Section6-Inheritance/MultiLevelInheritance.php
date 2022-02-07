<?php

class University2{

    public $universityName = "Oxford";

    function helloUniversity(){
        echo "Hello from $this->universityName. <br>";
    }
}

class Teacher2 extends University2 {

    public $teacherName = "Adrian";
    private $workingHours = 40;

    function helloTeacher(){
        echo "Hello from $this->teacherName. <br>";
    }

    function calculateSalary($perHour){
        return $perHour * $this->workingHours;
    }
}

class partTimeTeacher extends Teacher2 {
    public $teacherName = "June";
    private $workingHours = 8;

    function helloTeacher(){
        echo "Hello from $this->teacherName. <br>";
    }

    function calculateSalary($perHour)
    {
        return $perHour * $this->workingHours;

    }
}

$teacher1 = new partTimeTeacher();
$teacher1->helloUniversity();
$teacher1->helloTeacher();
echo $teacher1->calculateSalary(20) . "<br>";

$teacher2 = new Teacher2();
$teacher2->helloUniversity();
$teacher2->helloTeacher();
echo $teacher2->calculateSalary(20);