<?php

class Students{

    public $mathMark;
    public $engMark;
    public $histMark;

    function examResults($mark1, $mark2, $mark3){
        if ($mark1 < 35) {
            echo "You failed Math." . "<br>";
        } else echo "$mark1 is greater than 35 and you passed" . "<br>";

        if ($mark2 < 35) {
            echo "You failed English." . "<br>";
        } else echo "$mark2 is greater than 35 and you passed" . "<br>";

        if ($mark3 < 35) {
            echo "You failed History." . "<br>";
        } else echo "$mark3 is greater than 35 and you passed." . "<br>";
    }
}

$student1 = new Students();
$student1->engMark = 45;
$student1->mathMark = 25;
$student1->histMark = 89;
$student1->examResults($student1->mathMark,$student1->engMark, $student1->histMark);
