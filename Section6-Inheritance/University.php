<?php

class University {

    private $universityName;

    public function __construct($universityName)
    {
        $this->universityName = $universityName;
    }

    public function getUniversityName()
    {
        return $this->universityName;
    }

    function helloUniversity()
    {
        echo "Hello from " . $this->getUniversityName() . "<br>";
    }

}
