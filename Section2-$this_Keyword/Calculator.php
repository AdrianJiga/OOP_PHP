<?php

class Calculator{

    public $a;
    public $b;
    public $result;

    function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;

    }

    public function getA(){
        return $this->a;
    }

    public function getB(){
        return $this->b;
    }

    public function getResult(){
        return $this->result = $this->getA() + $this->getB();

    }
}

$calculator = new Calculator(4, 100);
echo $calculator->getResult();
