<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formation;
use App\Like;
use App\Commentformation;

class FormationList extends Model
{
    protected $guarded = [

    ];

    public function formation_list() {
        return $this->belongsTo(Formation::class,'formation_id');
    }

    public function formation_list_categ() {
        return $this->belongsTo(Categories::class,'type_de_formation_id');
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function isLikedByLoggedInUser(){
        return $this->likes->where('user_id',auth()->user()->id)->isEmpty() ? false:true;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->morphMany(Commentformation::class,'commentable')->latest();
    }
}
