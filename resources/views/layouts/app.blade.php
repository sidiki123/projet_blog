<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Le technicien agrégé</title>
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
    @notifyCss
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
    @can('manage-users')
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="{{route('index')}}">ACCUEIL </a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Nos offres </a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="{{route('admin.offres.create')}}">Enregistrer une offre</a>
                                        </li>
                                        <li><a href="{{route('admin.offres.index')}}">Liste des offres</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Nos techniciens </a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        </li>
                                        <li><a href="{{route('admin.technicien.register.index')}}">Enregister un technicien</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Nos formations </a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="{{route('admin.formations.create')}}">Enregister une formation</a>
                                        </li>
                                        <li><a href="{{route('admin.formations.index')}}">Liste des formations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a  href="{{route('admin.users.index')}}"><i class="notika-icon notika-form"></i>Utilisateurs du site</a></li>

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
                                                  >Tableau de bord
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
    @endcan

        <main class="py-4">
            @include('notify::messages')
            @yield('content')
        </main>
    </div>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>

    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{asset('assets/js/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('assets/js/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('assets/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- jvectormap JS
        ============================================ -->
    {{-- <script src="{{asset('assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/js/jvectormap/jvectormap-active.js')}}"></script> --}}
    <!-- sparkline JS
        ============================================ -->
    <script src="{{asset('assets/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/sparkline/sparkline-active.js')}}"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{asset('assets/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/js/flot/curvedLines.js')}}"></script>
    <script src="{{asset('assets/js/flot/flot-active.js')}}"></script>
    <!-- knob JS
        ============================================ -->
    <script src="{{asset('assets/js/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('assets/js/knob/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/js/knob/knob-active.js')}}"></script>
    <!--  wave JS
        ============================================ -->
    <script src="{{asset('assets/js/wave/waves.min.js')}}"></script>
    <script src="{{asset('assets/js/wave/wave-active.js')}}"></script>
    <!--  todo JS
        ============================================ -->
    <script src="{{asset('assets/js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="{{asset('assets/js/chat/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/chat/jquery.chat.js')}}"></script>
        <!-- icheck JS
            ============================================ -->

        <!--  todo JS
            ============================================ -->
    <script src="{{asset('assets/js/todo/jquery.todo.js')}}"></script>
    <!-- Login JS
            ============================================ -->
        <!-- plugins JS
            ============================================ -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
        <!-- main JS
            ============================================ -->
    <script src="{{asset('assets/js/main.js')}}"></script>
        @notifyJs

</body>
</html>
