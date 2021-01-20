<?php

namespace App;

use App\Ville;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
   public function ville(){
       return $this->hasMany(Ville::class);
   }
}
