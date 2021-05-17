<?php

namespace App\Observers;

use App\Jobs\SendPostUpdatedEmail;
use App\Models\Post;
use App\Services\PostService;

// Need to register in AppServiceProvider

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        //
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @param \App\Services\PostService $postService
     * @return void
     */
    public function updated(Post $post, PostService $postService)
    {
       foreach($post->authors as $author){
           $author->word_count =  $postService->calculateAuthorWords($author);
           $author->save();
       }
       SendPostUpdatedEmail::dispatch($post);
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
