@include('template.partials.header')

    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
    <div class="container mb-5">
        <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
            <div class="container">
                <a href="https://laravel.fr/c/laravel-france"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                    <h2 class="topic-title topic-title-solved">Formations</h2>
            </div>
        </div>
    </div>
	<!-- Breadcomb area End-->
    <!-- Bar Chart area End-->
    <div class="google-map-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                    @if ($formation_liste->formation_id == 1)
                    <video oncontextmenu="return false;" style="background-color: black; width:100%;" class="mb-5" height="480" controlsList="nodownload"  controls>
                        <source src="{{asset('storage/' . $formation_liste->fichier)}}" >
                      </video>
                      <div class="d-flex align-items">
                          <form action="{{route('detail.like')}}" id="form-js">
                          <div id="count-js" class="d-flex"> . {{$formation_liste->likes->count()}} Like(s)  </div>
                            <input type="hidden" id="formation_liste-id-js" value="{{$formation_liste->id}}">
                            <button class="btn btn-warning ml-5" style="margin-top:1em;" > <i class="notika-icon notika-star">&nbsp;&nbsp;{{$formation_liste->view_count}}</i> </button>
                            <button class="btn btn-success ml-5" type="submit" style="margin-top:1em;" > <i class="notika-icon notika-star">&nbsp;&nbsp;J'aime</i> </button>
                          </form>
                        </div>
                    @else
                    <iframe class="mb-5" style="width:100%;" height="480" src="{{asset('storage/' . $formation_liste->fichier)}}" frameborder="0"  ></iframe><div class="d-flex align-items">
                        <div>
                          <button class="btn btn-primary ml-5" style="margin-top:1em;" ><i class="notika-icon notika-eye">&nbsp;&nbsp;Commenter la video</i></button>
                        </div>
                        <form action="{{route('detail.like')}}" id="form-js">
                        <div id="count-js" class="d-flex"> {{$formation_liste->likes->count()}}  </div>
                          <input type="hidden" id="formation_liste-id-js" value="{{$formation_liste->id}}">
                          <button class="btn btn-primary ml-5" style="margin-top:1em;" > <i class="notika-icon notika-star">&nbsp;&nbsp;{{$formation_liste->view_count}}</i> </button>
                          <button class="btn btn-success ml-5" type="submit" style="margin-top:1em;" > <i class="notika-icon notika-star">&nbsp;&nbsp;

                              Like(s)</i> </button>
                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:3em;">
        <hr/>
                <h1 class="align-center" style="text-align:center; margin-bottom:1em;"> Commentaires </h1>


                @forelse ($commentformations as $comment)
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


                @empty
                    <div class="alert alert-info">Aucun commentaire pour le moment </div>
                @endforelse

                <form action="{{route('technicien.commentsformation.store', $formation_liste)}}" method='POST' class="mt-3" style="margin-top:5em;">
                @csrf
                <div class="form-group">
                    <label for="content"> Votre commentaire </label>
                    <textarea class="form-control" name="content" id="content" rows="5"> </textarea>
                </div>
                <input type="hidden" name="commentable_id" value="{{$formation_liste->id}}">
                <input type="hidden" name="commentable_type" value="{{'App\FormationList'}}">
                <button type="submit" class="btn btn-primary">Soummettre son commentaire </button>
                </form>
        </div>
    <!-- Bar Chart area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
    
</body>

</html>
