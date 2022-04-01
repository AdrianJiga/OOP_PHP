<?php

class Compare {

    public $post;

    public function __construct($post)
    {
        $this->post = $post;
    }
}

// Identity oeprator - ===
function compare1(&$obj, &$obj2){
    if ($obj === $obj2) {
        return true;
    } else {
        return false;
    }
}

// Comparison operator - ==
function compare2(&$obj, &$obj2){
    if ($obj == $obj2) {
        return true;
    } else {
        return false;
    }
}

$post1 = new Compare("This a post object");
$post2 = new Compare("This a post object");

//this is because they use 2 different references
//When using the identity operator they need to be pointing to the same reference
echo compare1($post1, $post2) ? "SAME" : "DIFFERENT"; echo "<br>";
$post3 = clone $post1;
echo compare1($post1, $post3) ? "SAME" : "DIFFERENT";
echo "<br>";

//this one compares the values because it uses the comparison operator
echo compare2($post1, $post2) ? "SAME" : "DIFFERENT"; echo "<br>";