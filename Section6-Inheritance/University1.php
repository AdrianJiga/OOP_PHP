<?php

class University1{

    public $universityName;
    public $universityAddress;
    public $licenseNumber;

    public function __construct($universityName, $universityAddress, $licenseNumber)
    {
        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
        $this->licenseNumber = $licenseNumber;
    }

    function printUniDetails()
    {
        echo "University name: $this->universityName <br>";
        echo "University address: $this->universityAddress <br>";
        echo "University license number: $this->licenseNumber<br>";
    }
}
