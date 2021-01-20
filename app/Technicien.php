<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
    protected $guarded = [
    ];

    public function tecUse(){
        return $this->belongsTo(User::class,'id_technicien');
    }
}
