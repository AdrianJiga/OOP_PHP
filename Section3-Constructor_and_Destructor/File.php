<?php

class File{

    public $fileHandler;
    public $fileSize;
    public $fileFound;

    function __construct($filename){
        $this->fileHandler = null;
        $this->fileFound = false;

        if (file_exists($filename)) {
            if (is_file($filename)) {
                $this->fileFound = true;
            }
        }

        if ($this->fileFound){
            $this->fileHandler = fopen($filename, "r");
            $this->fileSize = filesize($filename);
        }
    }

    function getContent() {

        if ($this->fileFound){
            $content = fread($this->fileHandler, $this->fileSize);
            return $content;
        } else return "No files found";
    }

    function __destruct() {

        if ($this->fileFound){
            fclose($this->fileHandler);
            echo "File is closed from the destructor";
        }
    }

}

$file1 = new File("File.txt");
echo $file1->getContent();