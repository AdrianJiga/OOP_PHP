<?php

class Teacher1 extends University1 {

    public $teacherName;
    public $teacherAge;
    public $subject;

    public function __construct($teacherName, $teacherAge, $subject, University1 $university1)
    {
        $this->teacherName = $teacherName;
        $this->teacherAge = $teacherAge;
        $this->subject = $subject;

        //this is how we set the properties of the parent class inside the constructor from the child class
        $this->universityName = $university1->universityName;
        $this->universityAddress = $university1->universityAddress;
        $this->licenseNumber = $university1->licenseNumber;

    }

    function printTeacherDetails()
    {
        echo "Teacher name: $this->teacherName <br>";
        echo "Teacher age: $this->teacherAge <br>";
        echo "Subject: $this->subject<br>";

    }

}