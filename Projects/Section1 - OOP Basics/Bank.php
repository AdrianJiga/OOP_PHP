<?php

class Bank{

    public $accountnumber;
    public $name;
    public $balance;

    function deposit($amount){
        $this->balance = $this->balance + $amount;
    }

    function deduct($amount){
        if ($this->balance <= 0) {
            echo "No money in the account" . "<br>";
        } elseif ($this->balance <= $amount) {
            echo "The amount requested to be deducted is greater than the balance." . "<br>";
        }
        $this->balance = $this->balance - $amount;
    }

    function checkBalance() : int{
        return $this->balance;
    }

}

$ing = new Bank();
$ing->name = "John Deer";
$ing->accountnumber = 123;
$ing->balance = 1000;
$ing->deduct(234);
$ing->deposit(5435);
echo "$ing->name with the account number $ing->accountnumber has the following balance: ";
$money = $ing->checkBalance();
echo "$money";
