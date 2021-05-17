<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_posts($userId){
        $user = User::findOrFail($userId);
        dd($user->posts[0]->comments);
    }

    
}
