<?php

class Files{

    function displayContent($filename) : bool{

        $result = true;
        try{

            echo "Read the Content of the file: $filename" . "<br>";
            $content = file_get_contents($filename);
            echo "Displaying Content of the file: $filename" . "<br>";
            echo $content . "<br>";

        } catch (Exception $e){
            $result = false;
        }

        return $result;
    }

}

$files1 = new Files1();
$files1->displayContent("Test11.txt");

//OOP example that brings reusability to your application code
$files2 = new Files1();
$files2->displayContent("Test1.txt");