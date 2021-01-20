<?php

namespace App;

use App\Post;
use App\Role;
use App\Abonne;
use App\Technicien;
use App\Like;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\FormationList;
use App\Commentformation;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function isAdmin(){
        return $this->roles()->where('name','admin')->first();
    }

    public function hasAnyRoleAdmin(array $roles){
        return $this->roles()->where('name',$roles)->first();
    }

    public function hasAnyRole(array $roles){
        return $this->roles()->where('name',$roles)->first();
    }

    public function usePost(){
        return $this->hasMany(Post::class);
    }

    public function useAbo(){
        return $this->hasMany(Abonne::class,'id_abonne');
    }

    public function useTec(){
        return $this->hasMany(Technicien::class,'id_technicien');
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function useForm(){
        return $this->hasMany(Commentformation::class);
    }

}
