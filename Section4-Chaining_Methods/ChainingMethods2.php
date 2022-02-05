<?php


//adding a property to the previous class to see the difference. $name will be changed in method1().
class ChainingMethods2 {
    public $name;

    function method1(){
        echo "Hello from method1. <br>";
        $this->name = "Chain Methods";
        return $this; //this is needed to chain method2() after accessing method1()
    }

    function method2(){
        echo "Hello from method2. echoing the name $this->name <br>";
    }
}
$cm = new ChainingMethods2();
$cm->method1()->method2(); // $cm->method1() is equal to $this in this case and that's why method2() can be chained
