<?php

namespace App;

use App\User;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded= [];
    public function postedBy(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->morphMany(Comment::class, 'commentable')->latest();
    }
}
