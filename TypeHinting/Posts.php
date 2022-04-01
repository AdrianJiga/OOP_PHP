<?php

class Posts {

    public function savePost() : void {
        echo "This is a saving post! <br>";
    }

    public function fetchPost(String $post) : String {
        echo "This $post is fetched!";
        return $post;
    }
}

$post = new Posts();
$post->savePost();
$post->fetchPost("Post");
