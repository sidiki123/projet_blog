<!doctype html>
<html class="no-js" lang="">

{{-- infos@letechnicienagree-bfa.com
U5TiATb7OH4;PuLG --}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Le technicien agréé</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    @notifyCss

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/notika-custom-icon.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/wave/waves.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" defer></script>


    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"><link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    {{-- <link href="{{asset('assets/fonts/06_fontsCANAL/CanalDemiRomain.otf')}}" rel="stylesheet"> --}}

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style_header.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style >

/* {{asset('assets/fonts/06_fontsCANAL/CanalDemiRomain.otf')}}" */
        section {
  width: 100%;
  display: inline-block;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
	background: rgb(0, 0, 0);
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

        p,a,h1,h2,h3,h4 {
	margin: 0;
	padding: 0;
}

.section-team {
	font-family: "Poppins", sans-serif;
	padding: 80px 0;
}

.section-team .header-section {
	margin-bottom: 50px;
}

.section-team .header-section .small-title {
    margin-bottom: 25px;
	font-size: 16px;
    font-weight: 500;
    color: #000000;
}

.section-team .header-section .title {
    font-weight: 700;
    width: 100%
    font-size: 45px;
    color: rgb(0, 0, 0);
}

.section-team .single-person {
	margin-top: 30px;
	padding: 30px;
	background-color: #000000;
	border-radius: 5px;
}

.section-team .single-person:hover {
	background: linear-gradient(to right, #178323, #148a07);
}

.section-team .single-person .person-image {
    position: relative;
    margin-bottom: 50px;
    border-radius: 50%;
    border: 4px dashed transparent;
    transition: padding .3s;
}

.section-team .single-person:hover .person-image {
    border: 4px dashed #fff;
}

.section-team .single-person .person-image img {
	width: 100%;
    border-radius: 50%;
}

.section-team .single-person .person-image .icon {
	position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%,50%);
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background: linear-gradient(to right, #016cec, #00b5f7);
    color: rgb(255, 255, 255);
    border-radius: 50%;
    font-size: 24px;
}

.section-team .single-person:hover .person-image .icon {
	background: none;
	background-color: #fff;
	color: #016cec;
}

.section-team .single-person .person-info .full-name {
	margin-bottom: 10px;
	font-size: 28px;
    font-weight: 700;
}

.section-team .single-person .person-info .speciality {
    text-transform: uppercase;
    font-size: 14px;
    color: #016cec;
}

.section-team .single-person:hover .full-name,
.section-team .single-person:hover .speciality {
	color: #fff;
}
@font-face {
        font-family:'CanalBoldRomain';
        src: url('/fonts/CanalBoldRomain.otf');
        font-style: normal;
        font-weight: normal;
    }

    </style>
<link rel="stylesheet" href="{{asset('css/canal.css')}}">
    <!-- font awesome CSS



        ============================================ -->

    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    @yield('extra-js')

</head>

<body style="font-family: CanalBoldRomain">

<div id="app" >
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-color: black; width:100%;">
        <a href="{{ route('index') }}" style="font-size:32px;color:white;">Le Technicien Agréé</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto " style="margin-right: 5em;">
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"  style="font-weight: 900;font-size:15px">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"  style="font-weight: 900;font-size:15px">{{ __('Creer un compte') }}</a>
                                </li>
                            @endif
                        @else
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" id="login_dd"  style="font-weight: 900" role="button"id="navbarDropdown" style="text-align: right;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu mr-5 " aria-labelledby="login_dd" style="margin-right:20 px;left:-100%;">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"  style="font-weight: 700;font-size:15px">
                         {{ __('se deconnecter') }}
                     </a> <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @can('manage-users')
                    <a class="dropdown-item" href="{{ route('admin.users.index') }}"  style="font-weight: 700;font-size:15px">
                        Tableau de bord                        </a>
                    @endcan
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
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
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area" style="margin-bottom: 2em;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="{{set_active_route('index')}}"><a style="cursor: pointer;" href="{{route('index')}}"><i class="fa fa-home fa-1x" aria-hidden="true"></i>Accueil</a>
                        </li>
                        {{-- <li><a data-toggle="tab" href="#mailbox"><i class="fa fa-user fa-1x" aria-hidden="true"></i>Abonnes</a>
                        </li> --}}
                        <li class="{{set_active_route('#')}}"><a data-toggle="tab" href="#Interface"><i class="fa fa-user-secret fa-1x" aria-hidden="true"></i>
                            Techniciens</a>
                        </li>
                        @can('manage-posts')
                        <li class="{{set_active_route('#')}}"><a data-toggle="tab" href="#Charts"><i class="fa fa-book fa-1x" aria-hidden="true"></i>Espace Technicien</a>
                        </li>
                        @endcan

                        <li class="{{set_active_route('typography')}}"><a  href="{{route('typography')}}"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i> Nous contacter</a>
                        </li>
                        <li class="{{set_active_route('a_propos')}}"><a  href="{{route('a_propos')}}"><i class="fa fa-question-circle fa-1x" aria-hidden="true"></i>A propos</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">

                        {{-- <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('register')}}">S'inscrire</a>
                                </li>
                                <li><a href="https://www.canalplus-afrique.com/bf">MyCanal</a>
                                </li>
                            <li><a href="{{route('offres')}}">Offre en cours</a>
                                </li>
                            </ul>
                        </div> --}}
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li class="{{set_active_route('animations')}}"><a href="{{route('animations')}}">Contacter un technicien </a>
                                </li>
                                <li class="{{set_active_route('google_map')}}"><a href="{{route('google_map')}}">Verifier l'identifiant d'un technicien</a>
                                </li>

                            </ul>
                        </div>
                        @can('manage-posts')
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li class="{{set_active_route('bar_charts')}}"><a href="{{route('bar_charts')}}">Formations</a>
                                </li>
                                <li class="{{set_active_route('technicien.posts.index')}}"><a href="{{route('technicien.posts.index')}}">Operations techniques</a>
                                </li>
                                <li class="{{set_active_route('technicien.posts.create')}}"><a href="{{route('technicien.posts.create')}}">Créer un post</a>
                                </li>
                            </ul>
                        </div>
                        @endcan





                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('notify::messages')
