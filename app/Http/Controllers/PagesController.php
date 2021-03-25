<?php

namespace App\Http\Controllers;

use App\Like;
use App\User;
use App\Offre;
use App\Ville;
use Validator;
use App\Region;
use App\Session;
use App\Formation;
use App\Categories;
use App\Technicien;
use App\FormationList;
use Illuminate\Http\Request;
use Rainwater\Active\Active;
use Illuminate\Http\JsonResponse;
use App\Mail\ContactMessageCreated;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Mail;
use Mckenziearts\Notify\LaravelNotify;

class PagesController extends Controller
{


    public function index(){
        $numberOfUsers = Active::users()->count();
        $numberOfUsers_abonne = Active::users()->get();
        $numberOfUsers_technicien = Active::users()->get();
        $numberOfUsers_technicien= User::where('id_technicien',1)->get();
        $numberOfUsers_abonne= User::where('id_abonne',1)->get();
        // $formations = Formation::where('type_de_formation_id', $categ->id)->get();
        $users = User::all();
        $techniciens =Technicien::all();
        return view('template.index',compact('techniciens','users','numberOfUsers_abonne','numberOfUsers_technicien','numberOfUsers'));
    }

    public function index2(){
        return view('template.index-2');
    }

    public function index3(){
        return view('template.index-3');
    }

    public function index4(){
        return view('template.index-4');
    }

    public function analytics(){
        return view('template.analytics');
    }

    public function widgets(){
        return view('template.widgets');
    }

    public function inbox(){
        return view('template.inbox');
    }

    public function view_email(){
        return view('template.view-email');
    }

    public function compose_email(){
        return view('template.compose-email');
    }

    public function button(){
        return view('template.buttons');
    }



    public function villes(region $region){
        $villes = Ville::where('region_id', $region->id)->get();
        return view('template.villes.index',compact('villes'));
    }

    public function techs(ville $ville) {
        $techniciens = Technicien::where('ville_id', $ville->id)->get();
        return view('template.techniciens.index',compact('techniciens'));
    }



    public function data_map(){
        return view('template.data-map');
    }

    public function code_editor(){
        return view('template.code-editor');
    }

    public function image_cropper(){
        return view('template.image-cropper');
    }

    public function wizard(){
        return view('template.wizard');
    }

    public function flot_charts(){
        return view('template.flot-charts');
    }

    public function bar_charts(){
        $categs = Categories::all();
        return view('template.bar-charts',compact('categs'));
    }

    public function line_charts(){
        return view('template.line-charts');
    }

    public function area_charts(){
        return view('template.area-charts');
    }

    public function normal_table(){
        return view('template.normal-table');
    }

    public function data_table(){
        return view('template.data-table');
    }

    public function form_elements(){
        return view('template.form-elements');
    }

    public function form_components(){
        return view('template.form-components');
    }

    public function form_examples(){
        return view('template.form-examples.');
    }

    public function notification(){
        return view('template.notification');
    }
    public function alert(){
        return view('template.alert');
    }
    public function modals(){
        return view('template.modals');
    }
    public function buttons(){
        return view('template.buttons');
    }

    public function tabs(){
        return view('template.tabs');
    }

    public function accordion(){
        return view('template.accordion');
    }

    public function dialog(){
        return view('template.dialog');
    }

    public function popovers(){
        return view('template.popovers');
    }

    public function tooltips(){
        return view('template.tooltips');
    }

    public function dropdown(){
        return view('template.dropdown');
    }

    public function invoice(){
        return view('template.invoice');
    }

    public function typography(){
        return view('template.typography');
    }

    public function color(){
        return view('template.color');
    }

    public function login_register(){
        return view('template.login-register');
    }

    public function error(){
        return view('template.404');
    }

    public function offres(){
        $offres = Offre::all();
        return view('template.offres.index',compact('offres'));
    }

    public function like():JsonResponse {
        $formation_liste = FormationList::find(request()->id);

        if ($formation_liste->isLikedByLoggedInUser()) {
            $res = Like::where([
                'user_id' => auth()->user()->id,
                'formation_list_id' => request()->id
            ])->delete();

            if ($res) {
                return response()->json([
                    'count' =>FormationList::find(request()->id)->likes->count()
                ]);
            }

        } else {
            $like = new Like();
            $like->user_id = auth()->user()->id;
            $like->formation_list_id = request()->id;
            $like->save();

            return response()->json([
                'count' => FormationList::find(request()->id)->likes->count()
            ]);
        }
    }

    public function google_map(){
        return view('template.google-map');
    }

    public function animations(){
        $regions = Region::all();
        return view('template.animations',compact('regions'));
    }

    public function search(){
        request()->validate([
            'q' => 'required|min:4'
        ]);

        $q = request()->input('q');

        $techniciens=Technicien::where('identifiant','like',"%$q%")
                                // ->orWhere('numero_tel2','like', "%$q%")
                                ->paginate(10);

        return view('template.techniciens.search',compact('techniciens'));
    }

    public function contact_form(Request $request){
        $mailable = new ContactMessageCreated($request->name, $request->email,$request->telephone,$request->message);
        Mail::to('letechnicien.agree@gmail.com')->send($mailable);
        emotify('success', 'Votre message a été envoyé; nous vous reviendrons ulterieurement!');
        // notify()->success('Votre message a été envoyé; nous vous reviendrons ulterieurement!');
        return redirect()->back();

    }


}


