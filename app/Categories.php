<?php

namespace App;

use App\Formation;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $guarded = [
    ];

    public function categorie() {
        return $this->hasMany(Formation::class);
    }
}
