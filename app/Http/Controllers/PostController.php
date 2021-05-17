<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use App\Models\User;
use App\Notifications\PostUpdatedNotification;

class PostController extends Controller
{
    public function update_post($post_id,PostUpdateRequest $request){
        // $validated = $request->validated();
        $post = Post::findOrFail($post_id);
        // dd($post->authors);
        $post->update($request->all());
        
        return redirect()->route('post.index');
    }
}
