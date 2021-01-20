@extends('layouts.app')

@section('content')

<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">ACCUEIL </a>
                            </li>
                            {{-- <li><a data-toggle="collapse" data-target="#demoevent" href="#">ESPACE ABONNES</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">

                                    <li><a href="{{route('register')}}">S'inscrire</a>
                                    </li>
                                    <li><a href="https://www.canalplus-afrique.com/bf">MyCanal</a>
                                    </li>
                                <li><a href="{{route('offres')}}">Offre en cours</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li><a data-toggle="collapse" data-target="#democrou" href="#">TECHNICIENS</a>
                                <ul id="democrou" class="collapse dropdown-header-top">
                                    <li><a href="{{route('animations')}}">Contacter un technicien </a>
                                    </li>
                                    <li><a href="{{route('google_map')}}">Verifier l'identifiant d'un technicien</a>
                                    </li>
                                </ul>
                            </li>
                            @can('manage-posts')
                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">ESPACE TECHNICIENS </a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                    <li><a href="{{route('bar_charts')}}">Formations</a>
                                    </li>
                                    <li><a href="{{route('technicien.posts.index')}}">Operations techniques</a>
                                    </li>
                                    <li><a href="{{route('technicien.posts.create')}}">Créer un post</a>
                                    </li>
                                </ul>
                            </li>
                            @endcan
                            <li><a  data-target="#demodepart" href="{{route('typography')}}">CONTACTER CANAL+</a>
                            </li>
                            <li><a  data-target="#Miscellaneousmob" href="{{route('a_propos')}}">A PROPOS</a>
                            </li>
                            @guest
                            <li>
                                <a c href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                        <li >
                                            <a  href="{{ route('register') }}">{{ __('Creer un compte') }}</a>
                                        </li>
                                    @endif
                                    @else
                                    <li >
                                        <a data-toggle="collapse" data-target="#dem" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <ul id="dem" class="collapse dropdown-header-top">
                                        <li><a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Se deconnecter') }}
                                         </a>
                                        </li>
                                        <li>@can('manage-users')
                                            <a  href="{{ route('admin.users.index') }}"
                                              >Liste des utilisateurs
                                            </a>
                                            @endcan
                                        </li>
                                        </ul>
                                    </li>

                                @endguest

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
