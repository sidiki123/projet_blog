<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded= [];

    public function commentable() {
        return $this->morphTo();
    }

    public function commentBy() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments() { 
        return $this->morphMany(Comment::class,'commentable')->latest();
    }
}
