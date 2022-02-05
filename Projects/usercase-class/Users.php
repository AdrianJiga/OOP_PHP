<?php

class Users{

    function fetchUser($id): bool {

        $result = false;
        echo "Query the database";
        $result = true;
        echo "Display the database";

        return $result;
    }

    function deleteUser($id){
        echo "Deleting the records for user $id" . "<br>";
    }

}

$user1 = new Users();
$user1->fetchUser(101);
$user1->fetchUser(45);
$user1->deleteUser(44);
