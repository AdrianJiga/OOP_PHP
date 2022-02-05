<?php

class Bank{

    public $accountnumber;
    public $name;
    public $balance = 0;

    function __construct($accountnumber, $name){
        $this->accountnumber = $accountnumber;
        $this->name = $name;
        return $this;

    }

    function deposit($amount){
        $this->balance = $this->balance + $amount;
        return $this;
    }

    function deduct($amount){
        if ($this->balance <= 0) {
            echo "No money in the account" . "<br>";
            return $this;
        } elseif ($this->balance <= $amount) {
            echo "The amount requested to be deducted is greater than the balance." . "<br>";
            return $this;
        }
        $this->balance = $this->balance - $amount;
        return $this;
    }

    function checkBalance(){
        echo "Your Balance is: $this->balance <br>";
        return $this;
    }

}

$ing = new Bank(123, "John Deer");
$ing->deduct(234)->checkBalance();
$ing->deposit(5435)->checkBalance();
$ing->deduct(2355)->checkBalance();
$ing->deduct(23550)->checkBalance();
