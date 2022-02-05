<?php

// Calculate the salary of an employee

class Employee{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function __construct($id, $name, $totalLeaveTaken){
        $this->id = $id;
        $this->name = $name;
        $this->totalLeaveTaken = $totalLeaveTaken;
    }

    function getSalaryAmount($totalDays) : int {

        //$this is a special variable which can be used to access class properties
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        return $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
    }

}

$employee1 = new Employee(101, "John Smith", 4);
$salary = $employee1->getSalaryAmount(20);
echo "$employee1->name has worked $employee1->workingDays days and taken $employee1->totalLeaveTaken leaves" . PHP_EOL; //"<br>";
echo "$employee1->name salary is $salary dollars" . PHP_EOL;

echo "<br>";
echo "<br>";
echo "<br>";

$employee2 = new Employee(102, "Adrian Jackson", 1);
$salary = $employee2->getSalaryAmount(24);
echo "$employee2->name has worked $employee2->workingDays days and taken $employee2->totalLeaveTaken leaves" . PHP_EOL;//"<br>";
echo "$employee2->name salary is $salary dollars";