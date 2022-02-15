<?php

require_once "Phone.php";

class iOS implements Phone {

    private $phoneNumber;
    private $textMessage;

    /**
     * @param mixed $textMessage
     */
    public function setTextMessage($textMessage): void
    {
        $this->textMessage = $textMessage;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }


    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getTextMessage()
    {
        return $this->textMessage;
    }


    public function makeCall($phoneNumber){

        echo "Calling " . $this->getPhoneNumber() . "<br>";

    }
    public function sendMessage($phoneNumber, $textMessage) {

        echo "Sending the following message: '" . $this->getTextMessage() . "' to the following phone number: " . $this->getPhoneNumber();

    }

}

$iphone = new iOS();
$iphone->setPhoneNumber("0729319653");
$iphone->setTextMessage("Hello Mister Adrian. How are you today");
$iphone->makeCall($iphone->getPhoneNumber());
$iphone->sendMessage($iphone->getPhoneNumber(), $iphone->getTextMessage());