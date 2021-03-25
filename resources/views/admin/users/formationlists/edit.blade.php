@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main-menu-area" style="margin-bottom: 2em;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a href="{{route('index')}}"><i class="fa fa-home fa-1x" aria-hidden="true"></i>Accueil</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="fa fa-archive fa-1x" aria-hidden="true"></i>Nos offres</a>
                        </li>
                        <li><a data-toggle="tab" href="#Tables"><i class="fa fa-user-secret fa-1x" aria-hidden="true"></i>Nos Techniciens</a>
                        </li>

                        <li><a data-toggle="tab" href="#formations" ><i class="fa fa-book fa-1x" aria-hidden="true"></i> Formations</a>
                        </li>
                        <li><a  href="{{route('admin.users.index')}}"><i class="fa fa-group fa-1x" aria-hidden="true"></i>Utilisateurs du site</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('admin.technicien.register.index')}}">Enregistrer un technicien</a>
                                </li>
                                {{-- <li><a href="{{route('data_table')}}">Liste des technicens</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('admin.offres.create')}}">Enregistrer une offre</a>
                                </li>
                                <li><a href="{{route('admin.offres.index')}}">Liste des Offres</a>
                                </li>

                            </ul>
                        </div>
                        <div id="formations" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('admin.formations.create')}}">Enregistrer une formation</a>
                                </li>
                                <li><a href="{{route('admin.formations.index')}}">Liste des formations</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12 mt-5">
          <div class="tile">
            <h3 class="tile-title mb-5" style="font-size: 15px;">Editer une video ou un document</h3>
            <div class="tile-body">
            <form method="POST" action="{{route('admin.formations.update',$formation_list->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
            <div class="form-group row {{$errors->has('title') ? 'has-error' : ''}}">
                <label class="control-label col-md-3">Titre</label>
                <div class="col-md-8">
                    <input class="form-control " name="title" type="text" value="{{ old('title') ?? $formation_list->title }}" required="require">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row {{$errors->has('formation_id') ? 'has-error' : ''}}">
                <label class="control-label col-md-3">Formation</label>
                <div class="col-md-8">
                <select class="form-control" id="exampleSelect1" name="formation_id" required="require">
                @foreach($formations as $formation)
                <option value="{{$formation->id}}"  >{{$formation->nom_formation}}</option>
                @error('formation_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @endforeach
                </select>

                </div>
            </div>

            <div class="form-group row {{$errors->has('type_de_formation_id') ? 'has-error' : ''}}">
                <label class="control-label col-md-3">Categorie de la formation</label>
                <div class="col-md-8">
                <select class="form-control" id="exampleSelect1" name="type_de_formation_id" required="require">
                @foreach($categories as $categorie)
                <option value="{{$categorie->id}}"  >{{$categorie->nom}}</option>
                @error('type_de_formation_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @endforeach
                </select>

                </div>
            </div>

            <div class="form-group row {{$errors->has('fichier') ? 'has-error' : ''}}">
              <label class="control-label col-md-3">Fichier</label>
              <div class="col-md-8">
                <input class="form-control" name="fichier" type="file" value="{{ old('fichier') ?? $formation_list->fichier }}" required="require">
                @error('fichier')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="tile-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Quitter</a>
                  </div>
                </div>
              </div>
              </form>
            </div>

          </div>
        </div>

</div>
</div>
@endsection
