<?php

require_once "Phone.php";

class iOS implements Phone {

    public function makeCall($phoneNumber){

        echo "Calling " . $phoneNumber . "<br>";

    }
    public function sendMessage($phoneNumber, $textMessage) {

        echo "Sending the following message: '" . $phoneNumber . "' to the following phone number: " . $textMessage;

    }
}

$iphone = new iOS();
$iphone->makeCall(+40729319653);
$iphone->sendMessage(+40729319653, "Hello Mister Adrian. How are you today");