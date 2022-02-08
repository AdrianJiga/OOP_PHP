<?php

class Father{

    public $beardcolor;
    public $eyecolor;

    function __construct($beardcolor, $eyecolor)
    {
        $this->beardcolor = $beardcolor;
        $this->eyecolor = $eyecolor;
    }

    function printFathersDetail()
    {
        echo "Hair: " . $this->beardcolor."<br>";
        echo "Eyes: " . $this->eyecolor."<br>";
    }
}
