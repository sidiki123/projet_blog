<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use App\Abonne;
use App\Technicien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */



    protected function create_technicien(array $data)
    {
        $technicien=Technicien::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'numero_tel1' => $data['numero_tel1'],
            'numero_tel2' => $data['numero_tel2'],
            'numero_tel_whatsapp' => $data['numero_tel_whatsapp'],
            'quartier_de_residence' => $data['quartier_de_residence'],
            'rattachement' => $data['rattachement'],
            'ville' => $data['ville'],
            'pays' => $data['pays'],
             ]);




        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'id_technicien' =>$technicien['id'],
            // "salle"=>$request->Salle,
            'password' => Hash::make($data['password']),
        ]);
        // dd($technicien);

        // dd($user);


        $technicien->save();

        $role = Role::select('id')->where('name','technicien')->first();
        $user->roles()->attach($role);

        return $user;
    }

    protected function create(array $data)
    {
        $abonne=Abonne::create([
            'numero_de_reabonnement'=>$data['numero_de_reabonnement'],
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'numero_tel1' => $data['numero_tel1'],
            'quartier_de_residence' => $data['quartier_de_residence'],
            'ville' => $data['ville'],
            'pays' => $data['pays'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'id_abonne' =>$abonne['id'],
            // "salle"=>$request->Salle,
            'password' => Hash::make($data['password']),
        ]);



        $abonne->save();

        $role = Role::select('id')->where('name','abonne')->first();
        $user->roles()->attach($role);

        return $user;

    }

    protected function redirectTo(){
        if(Auth::user()->roles->pluck('name')->contains('abonne')) {
            return '/';
        }else{
            return '/';
        }
    }
}
