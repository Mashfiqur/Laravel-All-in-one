<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function authors()
    {
        return $this->hasMany(User::class, "id", "author_id");
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, "post_id", "id");
    }
}
