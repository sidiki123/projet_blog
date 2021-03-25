<?php

namespace App\Http\Controllers\Admin;

use notify;
use App\Role;
use App\User;
use App\Ville;
use App\Region;
use App\Technicien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('home');
        }

        $roles = Role::all();
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        emotify('success', 'Utilisateur modifié avec succes');
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::denies('delete-users')) {
            return redirect()->route('home');
        }

        $postGroups = User::where('id_technicien', $user->id_technicien)->get();
        foreach ($postGroups as $postGroup) {
            DB::table('techniciens')->where('id', $postGroup->id)->delete();
        }
    
        Technicien::where('id', $user->id_technicien)->delete();
       
        $user->roles()->detach();
        
        emotify('error', 'Utilisateur supprimé');
        return redirect()->route('admin.users.index');
    }

    public function tech_index()
    {
        $regions = Region::all();
        $villes = Ville::all();
        return view('admin.users.tech',compact('regions','villes'));
    }

    protected function create_technicien(request $request)
    {

        request()->validate([
            'name' => 'required|min:2',
            'prenom' => 'required|min:2',
            'identifiant' => 'required|min:4',
            'numero_tel1' => 'required|min:8',
            'numero_tel2' => 'required|min:8',
            'photo' => 'required',
            'identifiant' => 'required|min:4|unique:techniciens',
            'numero_tel_whatsapp' => 'required|min:8',
            'quartier_de_residence' => 'required|min:4',
            'rattachement' => 'required',
            'region_id' => 'required',
            'ville_id' => 'required',
            'pays' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $technicien= new Technicien();
        $technicien->name =  $request->get('name');
        $technicien->prenom = $request->get('prenom');
        $technicien->identifiant = $request->get('identifiant');
        $technicien->numero_tel1 = $request->get('numero_tel1');
        $technicien->numero_tel2 = $request->get('numero_tel2');
        $technicien->photo = $request->photo->store('public/images');
        $technicien->numero_tel_whatsapp = $request->get('numero_tel_whatsapp');
        $technicien->quartier_de_residence = $request->get('quartier_de_residence');
        $technicien->rattachement = $request->get('rattachement');
        $technicien->region_id = $request->get('region_id');
        $technicien->ville_id = $request->get('ville_id');
        $technicien->pays = $request->get('pays');
        $technicien->save();

        $user = User::create([
            'name' =>  $request->get('name'),
            'email' => $request->get('email'),
            'id_technicien' =>$technicien['id'],
            'password' => Hash::make($request['password']),
        ]);



        // $user = User::create([
        //     'name' => $technicien['name'],
        //     'email' => $data['email'],
        //     'id_technicien' =>$technicien['id'],
        //     // "salle"=>$request->Salle,
        //     'password' => Hash::make($data['password']),
        // ]);
        // dd($technicien);

        // dd($user);




        $role = Role::select('id')->where('name', 'technicien')->first();
        $user->roles()->attach($role);



        // $role = new Role(['name' => 'visiteur']);
        // $user->roles()->save($role);
        //  return $user;
         emotify('success', 'Technicien crée avec succes');
         return redirect()->route('admin.users.index');
    }
}
