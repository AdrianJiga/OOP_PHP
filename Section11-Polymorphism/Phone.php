<?php

interface Phone {

    function chargePhone();
    function getOS();

}

class Android implements Phone {

    public function chargePhone(){
        echo "Charging Android phone <br>";
    }

    public function getOS(){
        echo "This is an Android phone <br>";
    }
}

class iOS implements Phone {

    public function chargePhone(){
        echo "Charging iPhone <br>";
    }

    public function getOS(){
        echo "This is an iOS phone <br>";
    }
}

$phone1 = new Android();
$phone2 = new iOS();

$phone1->chargePhone();
$phone1->getOS();
echo "-------------------------------------------------------- <br>";
$phone2->chargePhone();
$phone2->getOS();
