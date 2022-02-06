<?php

// Calculate the salary of an employee

class Employee{
    private $id;
    private $name;
    private $workingHoursPerDay = 8;
    private $hourlyRate = 15;
    private $totalLeaveTaken;
    private $workingDays;

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

    public function getName() {
        return $this->name;
    }

    public function getTotalLeaveTaken() {
        return $this->totalLeaveTaken;
    }

    public function getWorkingDays() {
        return $this->workingDays;
    }

}


$employee1 = new Employee(101, "John Smith", 4);
$salary = $employee1->getSalaryAmount(20);
echo $employee1->getName() . " has worked " . $employee1->getWorkingDays() . " days and taken " . $employee1->getTotalLeaveTaken() . " leaves. " . PHP_EOL; //"<br>";
echo $employee1->getName() . "'s salary is " . $salary . " dollars." . PHP_EOL;

echo "<br>";

$employee2 = new Employee(102, "Adrian Jackson", 1);
$salary = $employee2->getSalaryAmount(24);
echo $employee2->getName() . " has worked " . $employee2->getWorkingDays() . " days and taken " . $employee2->getTotalLeaveTaken() . " leaves. " . PHP_EOL; //"<br>";
echo $employee2->getName() . "'s salary is " . $salary . " dollars." . PHP_EOL;