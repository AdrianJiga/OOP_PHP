<?php

class Doctor {

    protected int $hours;
    protected int $hourlyRate;

    public function __construct($hours, $hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
        $this->hours = $hours;
    }

    public function calculateFees(){
        echo $this->hours * $this->hourlyRate;
    }
}

class Specialist extends Doctor {
    protected int $bonus;

    /**
     * @param int $bonus
     */
    public function __construct(int $bonus)
    {
        parent::__construct(40,15);
        $this->bonus = $bonus;
    }


    public function calculateFees(){
        echo $this->hours * $this->hourlyRate;
    }
}

$doc1 = new Doctor(40,15);
$doc1->calculateFees();
$doc2 = new Specialist(40);
