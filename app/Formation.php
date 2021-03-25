<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FormationCateg;
use App\FormationList;

class Formation extends Model
{
    protected $guarded = [

    ];
    public function formation_liste() {
        return $this->hasMany(FormationList::class);
    }

    public function formation() {
        return $this->belongsTo(FormationCateg::class);
    }


}
