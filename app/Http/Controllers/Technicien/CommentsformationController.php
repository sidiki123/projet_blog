<?php

namespace App\Http\Controllers\Technicien;

use App\Comment;
use App\FormationList;
use App\Commentformation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request,FormationList $formation_liste)
    {   request()->validate([
            'content' => 'required',
        ]);
        $comment= new Commentformation();
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->commentable_id = request('commentable_id');;

        $comment->commentable_type = request('commentable_type');;
        $comment->save();
        emotify('success', 'Votre commentaire a été envoyé;');
        // $comment->commentable_id = request('commentable_id');
        // $formation_liste->comments()->save($comment);
        // return view('template.formations.show_detail');
        return redirect()->back();

    }

    public function store1(Request $request,FormationList $formation_liste)
    {
        $comment= new Commentformation();
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->commentable_id = request($formation_liste->commentable_id);
        dd($comment);
        $comment->save();
        // $formation_liste->comments()->save($comment);
        return view('template.formations.show_detail',compact('formation_liste'));
    }

    public function storeCommentReply_formation(Commentformation $comment_formation){
        $commentReply= new Commentformation();
        $commentReply->content = request('replyComment');
        $commentReply->user_id = auth()->user()->id;
        $comment_formation->comments()->save($commentReply);

        return redirect()->back();
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
    public function edit(FormationList $formationList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormationList  $formationList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormationList $formationList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormationList  $formationList
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormationList $formationList)
    {
        //
    }



}
