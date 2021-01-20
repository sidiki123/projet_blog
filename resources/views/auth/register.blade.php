


@extends('layouts.app')
<style>
    .contact-from{
  font-family: 'Poiret One', cursive;
  background: #3494E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EC6EAD, #3494E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EC6EAD, #3494E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

h4{
  font-weight: bold;
  margin-bottom: 2.5rem;
}
.form-wrapper{
  background: #fff;
  border-radius: 5px;
  padding: 50px;
}
.form-control, .custom-select{
  border-radius: 0px;
    color: #495057;
    background-color: #f1f1f1;
    border-color: none;


}

.form-control:focus {
    color: #495057;
    background-color: #ffffff;
    border:1px solid #b5b6b3;
    outline: 0;
    box-shadow: none;

}

.btn{
  background: #3494E6;
  border: #3494E6;
  padding: 0.6rem 3rem;
  font-weight: bold;
}
.btn:hover, .btn:focus, .btn:active, .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
  background: #3494E6;
  border: #3494E6;
  outline: 0;
}
</style>

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

<section class="contact-from">
    <div class="container">

                    <div class="row">
                        <div class="col-md-7 mx-auto">
                          <div class="form-wrapper">
                            <div class="row">
                              <div class="col-md-12 mb-4">
                                <h4>Creer un compte</h4>
                              </div>
                            </div>
                        <form _lpchecked="1" method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nom" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" placeholder="Prenom" required autocomplete="prenom" autofocus>

                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Adresse mail" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="numero_tel1" type="tel" class="form-control @error('numero_tel1') is-invalid @enderror" name="numero_tel1" placeholder="Numero de telephone 1" value="{{ old('numero_tel1') }}" required autocomplete="numero_tel1" autofocus>

                                            @error('numero_tel1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="numero_de_reabonnement" type="number" class="form-control @error('numero_de_reabonnement') is-invalid @enderror" placeholder="Numero de reabonnement" name="numero_de_reabonnement" value="{{ old('numero_de_reabonnement') }}" required autocomplete="numero_de_reabonnement" autofocus>

                                            @error('numero_de_reabonnement')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confrmation de mot de passe" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <div class="form-group">
                                                <input id="quartier_de_residence" placeholder="Quartier de residence" type="text" class="form-control @error('quartier_de_residence') is-invalid @enderror" name="quartier_de_residence" value="{{ old('quartier_de_residence') }}" required autocomplete="quartier_de_residence" autofocus>

                                                @error('quartier_de_residence')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror                                            </div>

                                        </div>
                                    </div>

                                  <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="ville" type="text" placeholder="Ville" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>

                                            @error('ville')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                        </div>
                                    </div>

                                  <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="pays" type="text" placeholder="Pays" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>

                                            @error('pays')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                        </div>
                                   </div>



                                </div>
                                <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Enregister</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

      </div>
</section>
@endsection
