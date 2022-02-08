<?php

final class Banking {

    private $account = "Credit Card";
    private $id = "4312";

    final function getAccountDetails(){
        echo $this->id . " has a " . $this->account . " account <br>";
    }
}

class Users extends Banking {

    final function getAccountDetails(){
        echo "Not possible to override the getAccountDetails function from the parent class since it's set to final";
    }

}