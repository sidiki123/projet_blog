<?php

namespace App\Http\Controllers\Admin;

use App\Offre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres= Offre::all();
        return view('admin.users.offres.index',compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.offres.create');
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
            'title' => 'required',
            'description' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'image' => 'required',
        ]);

        $offre= Offre::create([
            'title'=> $request->get('title'),
            'description'=>$request->get('description'),
            'date_debut'=>$request->get('date_debut'),
            'date_fin'=>$request->get('date_fin'),
            $image='image' => $request->image->store('public/images'),
            ]);
            $offre->save();
            return Redirect()->route('admin.offres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offre=Offre::findOrFail($id);
        return view('admin.users.offres.edit',compact('offre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'image' => 'required',
        ]);
            $offre = Offre::find($id);

            $offre->title =  $request->get('title');
            $offre->description = $request->get('description');
            // $event->photo = $image->$event['photo'];
            $offre->image = $request->image->store('public/images');
            $offre->date_debut = $request->get('date_debut');
            $offre->date_fin = $request->get('date_fin');
            $offre->save();

           return redirect()->route('admin.offres.index',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offre::destroy($id);
        return back();
    }
}
