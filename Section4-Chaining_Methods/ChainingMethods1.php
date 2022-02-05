<?php

class ChainingMethods1 {

    function method1(){
        echo "Hello from method1. <br>";
        return $this; //this is needed to chain method2() after accessing method1()
    }

    function method2(){
        echo "Hello from method2. <br>";
    }
}
$cm = new ChainingMethods1();
$cm->method1()->method2(); // $cm->method1() is equal to $this in this case and that's why method2() can be chained
