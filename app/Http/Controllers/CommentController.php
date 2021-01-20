<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Commentformation;
use App\FormationList;
use Illuminate\Http\Request;
use App\Post;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function store(Request $request,Post $post) {
        request()->validate([
            'content' => 'required',
        ]);
        $comment= new Comment();
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $post->comments()->save($comment);
        emotify('success', 'Votre commentaire a été envoyé;');
        return redirect()->route('technicien.posts.show',$post);
    }

    public function storeCommentReply(Comment $comment){
        request()->validate([
            'replyComment' => 'required',
        ]);
        $commentReply= new Comment();
        $commentReply->content = request('replyComment');
        $commentReply->user_id = auth()->user()->id;
        $comment->comments()->save($commentReply);
        emotify('success', 'Votre reponse a été envoyé;');
        return redirect()->back();


    }



}
