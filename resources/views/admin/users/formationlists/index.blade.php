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
            <div class="col-md-12 mb-5">
                <div class="tile">
                  <h3 class="tile-title" style="font-size: 15px;">Liste des formations detaillées</h3>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Titre</th>
                        <th>Categorie</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($formations_lists as $formations_list)
                        <tr>
                            <td>{{$formations_list->id}}</td>
                            <td>{{$formations_list->title}}</td>
                            <td>{{$formations_list->formation_list_categ->nom}}</td>
                            <td>
                                <a href="{{route('admin.formations.edit',$formations_list->id)}}"><button class="btn btn-warning" type=""><i class="fa fa-fw fa-lg fa-check-circle"></i>Modifier</button></a>
                                <form action="{{route('admin.formations.destroy',$formations_list)}}" method="post">
                                    @csrf
                                   @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Suppimer</button>
                                </form>
                            </td>
                          </tr>

                        @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>

</div>
</div>
@endsection
