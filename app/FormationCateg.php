<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formation;

class FormationCateg extends Model
{
    protected $guarded = [
    ];

    public function formation_categorie() {
        return $this->hasMany(Formation::class);
    }
}
