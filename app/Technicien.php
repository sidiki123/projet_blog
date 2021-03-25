<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
    protected $guarded = [
    ];

    protected $table = 'techniciens';
    protected $primaryKey = 'id';

    public function tecUse(){
        return $this->belongsTo(User::class,'id_technicien');
    }
}
