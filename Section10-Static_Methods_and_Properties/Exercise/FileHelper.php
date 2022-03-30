<?php

class FileHelper {

    static function hasData($filename) : bool {

        if(!file_exists($filename)){
            echo "$filename does not exist" . "<br>";
            return false;
        }

        $content = file_get_contents($filename);

        if (empty($content)){
            return false;
        } else {
            return true;
        }
    }
}

if (FileHelper::hasData("Test.txt")){
    echo "Data Found";
} else {
    echo "Data NOT found";
}
