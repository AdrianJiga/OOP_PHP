<?php

require "University.php";

class Teacher extends University {

    private $teacherName;

    public function __construct($teacherName, $universityName)
    {
        $this->teacherName = $teacherName;
        parent::__construct($universityName);

    }

    public function getTeacherName()
    {
        return $this->teacherName;
    }

    function helloTeacher()
    {
        echo "Hello from " . $this->getTeacherName() . "<br>";
    }

}

$mathTeacher = new Teacher("John Delgado", "Oxford");
$mathTeacher->helloUniversity();
$mathTeacher->helloTeacher();

echo "The teacher, " . $mathTeacher->getTeacherName() . ", teaches at the " . $mathTeacher->getUniversityName() . " University";