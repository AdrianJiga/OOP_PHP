<?php


class Posting {

    public $post;
    public bool $hasPosts = true;

    /**
     * @param $post
     */
    public function __construct($post)
    {
        $this->post = $post;
    }
}

function copyObject(Posting $obj1, Posting $obj2){
    $obj2->post = $obj1->post;
    $obj2->hasPosts = $obj1->hasPosts;
}

$post1 = new Posting("This is a first post");
$post2 = new Posting("This is a second post");

//when copying an object we're actually copying the properties of that object.
copyObject($post1, $post2);
echo $post2->post;