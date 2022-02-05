<?php

class Posts{

    public $content;

    function __construct($content){

        //initialize the value
        echo "This is the constructor. <br>";
        $this->content = $content;
    }

    function __destruct(){

        //close the connection or empty the space;
        echo "This is the destructor. <br>";
    }

    function printContent(){
        echo $this->content;
        return $this;
    }

}

$post1 = new Posts("This is a Post Content");
$content = $post1->printContent()->content;
echo $content;