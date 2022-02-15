<?php

require_once "Stock.php";

class MyStock implements Stock {

    private $stock;

    public function sellStock(){
        echo "Selling stock <br>";
    }

    public function buyStock(){
        echo "Buying stock <br>";
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock){
        $this->stock = $stock;
    }
}

$stock = new MyStock();
$stock->buyStock();
$stock->sellStock();
