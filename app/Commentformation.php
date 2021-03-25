<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\FormationList;

class Commentformation extends Model
{
    protected $guarded= [];

    public function commentable() {
        return $this->morphTo();
    }

    public function commentBy() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments() {
        return $this->hasMany(Commentformation::class,'commentable_id')->latest();
    }

    public function commentss() {
        return $this->belongsTo(FormationList::class,'commentable_id')->latest();
    }


}
