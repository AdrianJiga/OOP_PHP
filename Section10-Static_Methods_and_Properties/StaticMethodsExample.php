<?php

class CalculatorTrei{

    static public $result;
    static function add($a, $b){
        self::$result = $a + $b;
    }

}

CalculatorTrei::add(3,5);
echo CalculatorTrei::$result .  "<br>";


