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
        <div class="normal-table-area">
            <div class="container">


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="normal-table-list mg-t-30">
                            <div class="basic-tb-hd">
                                <h2>Liste des utilisateurs du site</h2>
                            </div>
                            <div class="bsc-tbl-st">
                                <table class="table table-striped">
                                    <thead>

                                        <tr>
                                            <th>id</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                            <td>
                                            <a href="{{route('admin.users.edit',$user->id)}}"><button class="btn btn-primary">editer</button></a>
                                            <form action="{{route('admin.users.destroy',$user->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                    <button class="btn btn-danger">supprimer</button>
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
    </div>
</div>
@endsection


