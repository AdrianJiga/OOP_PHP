<?php

declare(strict_types=1);

require_once "University1.php";
require_once "Teacher1.php";

$uni = new University1("Cambridge", "Europe, Romania","ABC123");

//$uni1 is used to access the constructor of the parent class and add properties to the parent class properties
$teach1 = new Teacher1("Adrian John", 27, "Computer Science", $uni);
$teach2 = new Teacher1("Sally Winston", 43, "Physics", $uni);


$teach1->printTeacherDetails();
$teach1->printUniDetails();
echo "-----------------------------------------------<br>";
$teach2->printTeacherDetails();
$teach2->printUniDetails();
