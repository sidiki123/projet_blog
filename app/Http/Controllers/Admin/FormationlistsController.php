<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Formation;
use App\FormationList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormationlistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations_lists= FormationList::all();
        return view('admin.users.formationlists.index',compact('formations_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        $formations = Formation::all();
        return view('admin.users.formationlists.create',compact('formations','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|min:5',
            'formation_id' => 'required',
            'type_de_formation_id' => 'required',
            'fichier' => 'required',
        ]);

        $formation_list= FormationList::create([
            'title'=> $request->get('title'),
            'formation_id'=> $request->get('formation_id'),
            'type_de_formation_id'=>$request->get('type_de_formation_id'),
            $fichier='fichier' => $request->fichier->store('public/images'),
            ]);
            $formation_list->save();
            return Redirect()->route('admin.formations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormationList  $formationList
     * @return \Illuminate\Http\Response
     */
    public function show(FormationList $formationList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormationList  $formationList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::all();
        $formations = Formation::all();
        $formation_list=FormationList::findOrFail($id);
        return view('admin.users.formationlists.edit',compact('formation_list','categories','formations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormationList  $formationList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate([
            'title' => 'required|min:5',
            'formation_id' => 'required',
            'type_de_formation_id' => 'required',
            'fichier' => 'required',
        ]);
        $formation_list = FormationList::find($id);

        $formation_list->title =  $request->get('title');
        $formation_list->formation_id =  $request->get('formation_id');
        $formation_list->type_de_formation_id = $request->get('type_de_formation_id');
        // $event->photo = $image->$event['photo'];
        $formation_list->fichier = $request->fichier->store('public/images');
        $formation_list->save();

       return redirect()->route('admin.formations.index',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormationList  $formationList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormationList::destroy($id);
        return back();
    }
}
