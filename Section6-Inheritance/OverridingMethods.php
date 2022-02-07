<?php

class University {

    function hello(){
        echo "Hello from University Class. <br>";
    }

}

class Teacher extends University{

    //Overriding of hello method from the University class
    function hello(){
        echo "Hello from the Teacher Class <br>";
        //calling the hello from the University class
        parent::hello();
    }

}

$teach1 = new Teacher();
$teach1->hello();
