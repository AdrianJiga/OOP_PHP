<?php

trait DatabaseHelper {

    function getRecords(){
        echo "Here are your records";
    }
}

trait StringHelper {

    function removeSpaces($str): string {
        return trim($str);
    }
}

class Studentssss {
    use DatabaseHelper;
    use StringHelper;

    function connectDB(){
        $this->getRecords();
        echo $this->removeSpaces("     What the fuck is this      ");
    }
}

$stud1 = new Studentssss();
$stud1->connectDB();


