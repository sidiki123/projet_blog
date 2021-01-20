
@include('template.partials.header')
    <script>
        function toggleReplyComment(id)
        {
            let element = document.getElementById('replyComment-' + id);
            // element.style.toggle('display:none');
            element.classList.toggle('hidden');
        }
    </script>

<div class="container mb-5">
    <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
        <div class="container">
            <a href="https://laravel.fr/c/laravel-france"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                <h2 class="topic-title topic-title-solved">Details du post</h2>
        </div>
    </div>
</div>


<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="view-mail-list sm-res-mg-t-30">
                        <div class="cmp-int-box mg-t-20">
                            <div class="html-editor-cm">
                                <h2>{{$post->title}}</h2>
                                <p>{{$post->content}} </p>
                                <span class="vw-tr">publié par {{$post->postedBy->name}} </span>
                               <p> <span> le {{$post->created_at->format('d/m/Y à H:m')}}</span> </p>
                            </div>
                        </div>

                        <div class="vw-ml-action-ls text-left mg-t-20 d-inline">
                            <div class="btn-group ib-btn-gp active-hook nk-email-inbox ">
                                <button class="btn btn-primary btn-sm waves-effect"><i class="notika-icon notika-next"></i> Reply</button>
                                @can('update',$post)
                                <a href="{{route('technicien.posts.edit', $post)}}"> <button class="btn btn-warning btn-sm waves-effect"><i class="notika-icon notika-down-arrow"></i> Editer</button> </a>
                                @endcan
                                @can('delete',$post)
                                <form action="{{route('technicien.posts.destroy',$post)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm waves-effect"><i class="notika-icon notika-trash"></i> Supprimer</button>
                                </form>
                                @endcan
                            </div>
                        </div>
                    </div>
    </div>


</div>
<div class="container" style="margin-top:3em;">
<hr/>
        <h1 class="align-center" style="text-align:center; margin-bottom:1em;"> {{count($post->comments)}} Commentaire(s) </h1>


        @forelse ($post->comments as $comment)
            <div class="card" style="margin-bottom:1em;">
                <div class="card-body d-flex">
                 <div>
                    {{$comment->content}}

                    <div class="d-flex justify-content-between align-items-center" style="margin-top:15px;">
                        <small>Posté le <span style="color:red; font-weight:bold;"> {{$comment->created_at->format('d/m/Y')}} </span> par </small>
                        <span class="badge badge-danger" style="background-color:#0275d8;">{{$comment->commentBy->name}} </span>
                    </div>
                 </div>
                <div>
                    <solution-button></solution-button>
                </div>
            </div>
            </div>


        @foreach ($comment->comments as $replyComment)

        <div class="card" style="margin-bottom:1em;background-color:rgb(117, 161, 255); margin-left:10em;">
            <div class="card-body">
                {{$replyComment->content}}
            </div>
            <div class="d-flex justify-content-between align-items-center" style="margin-top:1px;">
                <small>Posté le <span style="color:red; font-weight:bold;"> {{$replyComment->created_at->format('d/m/Y')}} </span> par </small>
                <span class="badge badge-danger" style="background-color:#0275d8;">{{$replyComment->commentBy->name}} </span>
        </div>
        </div>


        @endforeach
        @auth
        <button class="btn btn-info" style="margin-top:1em;" onclick="toggleReplyComment({{ $comment->id }})">Répondre au commentaire </button>
        <form action="{{route('comments.storeReply',$comment)}}" class="ml-3 hidden" id="replyComment-{{ $comment->id }}" style="margin-left: 3em;"  method="POST" >
            @csrf
            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                <label for="replyComment">Ma reponse</label>
                    <textarea name="replyComment"  class="form-control" id="replyComment" rows="5" required="required">{{ old('name') }}</textarea>
                    @error('replyComment')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <button type="submit" class="btn btn-primary btn-sm waves-effect"><i class="notika-icon notika-next"></i> Reply</button>
            </form>
        <hr/>
        @endauth

        @empty
            <div class="alert alert-info">Aucun commentaire pour le moment </div>
        @endforelse
        <form action="{{route('comment.store', $post)}}" method='POST' class="mt-3" style="margin-top:5em;">
        @csrf
        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
            <label for="content"> Votre commentaire </label>
            <textarea class="form-control" name="content" id="content" rows="5" required="required"> {{ old('name') }}</textarea>
            @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Soummettre son commentaire </button>
        </form>
</div>
 @include('template.partials.footer_script')
 <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>
