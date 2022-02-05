<?php

class Posts{

    function __construct(){

        //initialize the value
        echo "This is the constructor. <br>";
    }

    function __destruct(){

        //close the connection or empty the space;
        echo "This is the destructor. <br>";
    }

}

$post1 = new Posts();
