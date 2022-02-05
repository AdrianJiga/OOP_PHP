<?php

class Files1 {
    function displayContent($filename) {
        if (!file_exists($filename)) {
            echo "$filename does not exist." . "<br>";
        }

        echo file_get_contents($filename) . "<br>";
    }

    function getContent($filename) : string {
        if (!file_exists($filename)) {
            echo "$filename does not exist." . "<br>";
            return "";
        }

        $content = file_get_contents($filename);
        return $content;
    }
}

$file1 = new Files1();
$file1->displayContent("Test11.txt");
echo "Here is your file content " . $file1->getContent("Test11.txt");