<?php

class Bank1{

    private $balance;

    function __construct($balance) {
        $this->balance = $balance;
    }

    public function getBalance() {
        return $this->balance;
    }

    function depositAmount($amount){
        $this->balance = $this->balance + $amount;
    }

    function deductAmount($amount){
        if ($this->balance <= 0) {
            echo "No money in the account" . "<br>";
        } elseif ($this->balance <= $amount) {
            echo "The amount requested to be deducted is greater than the balance." . "<br>";
        }
        $this->balance = $this->balance - $amount;
    }
}

$card = new Bank1(400);
$card->depositAmount(342);
$card->deductAmount(287);
echo "The balance is equal to " . $card->getBalance();
