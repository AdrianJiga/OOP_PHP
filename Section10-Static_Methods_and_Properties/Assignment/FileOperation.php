<?php

class FileOperation {

    /**
     * @throws Exception
     */
    public static function hasContent($filename): bool
    {
        if (!file_exists($filename)) throw new Exception("File not found: $filename");

        $content = file_get_contents($filename);

        return !empty($content);
    }

}

if (FileOperation::hasContent("Word.txt")){
    echo "The file has content";
}
