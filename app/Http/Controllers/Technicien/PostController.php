<?php

namespace App\Http\Controllers\Technicien;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
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
        // if(Gate::denies('manage-blog')){
        //     return redirect()->route('technicien.posts.index');
        // }

        $posts = Post::latest()->paginate(10);
        return view('template.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.posts.create');
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
            'title' => 'required|min:4',
            'content' => 'required|min:5',
        ]);
        $post= Post::create([
                'title'=> $request->get('title'),
                'content'=>$request->get('content'),
                'user_id'=>auth()->user()->id
                ]);
        $post->save();
        emotify('success', 'Votre post a été creé;');
        return redirect()->route('technicien.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->update(['view_count' => $post->view_count + 1]);

        return view('template.posts.show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update',$post);
        return view('template.posts.edit',compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        request()->validate([
            'title' => 'required|min:4',
            'content' => 'required|min:5',
        ]);
        $this->authorize('update',$post);
        $post->title =  $request->get('title');
        $post->content = $request->get('content');
        $post->save();
        emotify('success', 'Votre post a été modifié;');
        return redirect()->route('technicien.posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete',$post);
        Post::destroy($post->id);
        emotify('error', 'Votre post a été supprimé;');
        return redirect()->route('technicien.posts.index');
    }
}
