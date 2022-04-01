<?php

trait FilesHelper {

    function readFile(){
        echo "Reading the file <br>";
    }

    function closeFile(){
        echo "Closing the file <br>";
    }
}

class Exercise {
    use FilesHelper;

    public $post;

    function posting(){
        echo $this->readFile();
        echo $this->closeFile();
    }
}

$post = new Exercise();
$post->posting();