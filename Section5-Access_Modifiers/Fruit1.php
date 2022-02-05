<?php

class Fruit1 {

    public $name;
    public $color;
    public $weight;

    //public - the property or method can be accessed from everywhere. This is default
    function set_name($n) {  // a public function (default)
        $this->name = $n;
    }

    //protected - the property or method can be accessed within the class and by classes derived from that class
    protected function set_color($n) { // a protected function
        $this->color = $n;
    }

    //private - the property or method can ONLY be accessed within the class
    private function set_weight($n) { // a private function
        $this->weight = $n;
    }
}

$mango = new Fruit1();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR

