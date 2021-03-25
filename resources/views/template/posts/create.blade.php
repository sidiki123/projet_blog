@include('template.partials.header')
<div class="container mb-5">
    <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
        <div class="container">
            <a href="#"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                <h2 class="topic-title topic-title-solved">Creer un post</h2>
        </div>
    </div>
</div>
        <div class="container">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:4em;">
                    <div class="view-mail-list sm-res-mg-t-30">
                        <div class="view-mail-hd">
                            <div class="view-mail-hrd">
                                <h2>Poster une question</h2>
                            </div>
                        </div>
                        <form action="{{route('technicien.posts.store')}}" method="POST">
                        @csrf
                            <div class="cmp-int mg-t-20">
                            <div class="row">
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                        <div class="nk-int-st cmp-int-in cmp-email-over">
                                            <input type="text" name="title" value="{{ old('name') }}" class="form-control" placeholder="Titre" required="require"/>
                                            @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st cmp-int-in cmp-email-over">
                                            <textarea class="form-control" name="content" id="content" rows="5" placeholder="Description du probleme" required="require">{{ old('content') }} </textarea>
                                            @error('content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="vw-ml-action-ls text-left mg-t-20">
                                <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                    <button type="submit" class="btn btn-primary btn-sm waves-effect"><i class="notika-icon notika-next"></i> Soumettre</button>


                                </div>
                            </div>
                        </form>

                    </div>
            </div>
        </div>

@include('template.partials.footer_script')
</body>

</html>
