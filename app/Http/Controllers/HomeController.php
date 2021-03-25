<?php

namespace App\Http\Controllers;

use App\Like;
use App\User;
use App\Region;
use App\Formation;
use App\Categories;
use App\Commentformation;
use App\Technicien;
use App\FormationList;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('home',compact('users'));
    }

   


    public function formations(Categories $categ){
        $formations = Formation::where('type_de_formation_id', $categ->id)->get();
        return view('template.formations.index',compact('formations'));
    }

    public function formation_liste(Formation $formation,FormationList $formation_liste){
        $formation_listes = FormationList::where('formation_id', $formation->id)->get();
        return view('template.formations.formation_liste',compact('formation_listes','formation_liste'));
    }

    public function formation_detail(Formation $formation,FormationList $formation_liste){

        $formation_liste->update(['view_count' => $formation_liste->view_count + 1]);
        $commentformations = Commentformation::where('commentable_id', $formation_liste->id)->latest()->get();
        // dd($commentformations);
        return view('template.formations.show_detail',compact('formation_liste','commentformations'));
    }



    

}
