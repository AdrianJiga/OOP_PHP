<?php

class Post {

    public $post;
    public bool $hasPosts = true;

    public function __construct($post)
    {
        $this->post = $post;
    }

    function hello(){
        echo "hello";
    }
}

$post1 = new Post("this is a post");

foreach ($post1 as $key => $value) {
    //key is the property name, value is the value of the property
    echo $key . ' => ' . $value . "<br>";
}
echo var_dump($post1);
