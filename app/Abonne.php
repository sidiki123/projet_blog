<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Abonne extends Model
{
    protected $guarded = [
        
    ];

    public function aboUse(){
        return $this->belongsTo(User::class,'id_abonne');
    }
}
