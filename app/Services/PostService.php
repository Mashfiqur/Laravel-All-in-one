<?php

namespace App\Services;

class PostService{
    function calculateAuthorWords($author){
        $words_count = 0;
           foreach($author->posts as $post){
               $words_count += str_word_count($post->description);
           }
        return $words_count;
    }
}