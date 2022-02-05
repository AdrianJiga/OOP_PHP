<?php

class Calculator{

    public $a;
    public $b;
    public $result;

    public function getA(){
        return $this->a;
    }

    public function getB(){
        return $this->b;
    }

    public function getResult(){
        return $this->result = $this->getA() + $this->getB();
    }

    public function setA($a): void{
        $this->a = $a;
    }

    public function setB($b): void{
        $this->b = $b;
    }
}

$calculator = new Calculator();
$calculator->setA(4);
$calculator->setB(100);
echo $calculator->getResult();
