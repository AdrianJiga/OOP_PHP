<?php

class StringHelper {

    static function countVowel($content): int
    {
        $result = substr_count($content, "a") + substr_count($content, "e") + substr_count($content, "i") + substr_count($content, "o") + substr_count($content, "u");
        return $result;
    }

}

echo StringHelper::countVowel("What the Fuck");
