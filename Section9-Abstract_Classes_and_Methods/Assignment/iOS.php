<?php

abstract class Phone{

    abstract function chargeBattery();
    abstract function makePhoneCall();
    abstract function sendSMS();
}

class iOS extends Phone{

    public function chargeBattery()
    {
        echo "Charging Battery <br>";
    }

    public function makePhoneCall()
    {
        echo "Making a phone call <br>";
    }

    public function sendSMS()
    {
        echo "Sending an SMS <br>";
    }

}

$iPhone8 = new iOS();
$iPhone8->chargeBattery();
$iPhone8->makePhoneCall();
$iPhone8->sendSMS();