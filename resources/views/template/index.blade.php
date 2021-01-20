
@include('template.partials.header')
<style>
body {
    margin : 0 ;
    padding : 0 ;
    transition: all .3s;
  }
  ::-webkit-scrollbar {
    width: 10px;
  }
  ::-webkit-scrollbar-thumb {
    background:rgba(0, 0, 0, 0.3);
    border-radius:2px;
  }
  ::-webkit-scrollbar-thumb:hover {
    background:rgba(0, 0, 0, 0.9);
    border-radius:2px;
  }
  .containerr {
    width: 100%;
    margin: 0 auto;
    display :flex;
    flex-wrap:wrap;
  }

  .card{
    margin : auto;
    width: 350px;
    overflow : hidden;
    border-radius : 20px;
    background : white;
    margin-top:50px;
    transition: all .2s;
    box-shadow:5px 5px 15px rgba(0,0,0, .3);
  }

  .card:hover {
    box-shadow:5px 5px 25px rgba(0,0,0, .5);
    transform: translate(-5px, -5px);
  }

  .card:hover .icon svg{
    animation : iconjln 1s;
  }

  .img-cover{
    position: relative;
  }

  .card img{
    width: 350px;
    height:350px;
    object-fit:cover;
  }

  .icon{
    position:absolute;
    top:0;
    padding : 25px;
    right:0;
    border-bottom-left-radius:20px;
    backdrop-filter: blur(20px);
    background-color: rgba(255, 255, 255, 0.5);
    cursor: pointer;
  }

  .desc{
    padding : 1.5em ;
    font-family: 'Poppins', sans-serif;
  }
  .desc h1{
    display:inline;
  }
  .tdesc{
    margin-bottom:40px;
    width:100%;
    height:50px;
    overflow: auto;
  }

  .desc a{
    text-decoration: none;
    background-color: dodgerblue;
    padding: 15px 25px;
    color:white;
    border-radius: 15px;
    display:block;
    text-align: center;
    transition: all .2s;
  }
  .desc a:hover{
    background-color: SteelBlue;
  }
  .desc a:hover svg{
    animation : iconjln 1s;
  }

  @keyframes iconjln{
    0%, 100% {
      opacity : 1;
      transform: translateX(0%);
    }
    50%{
      opacity:0;
      transform: translateX(100%);
    }
    70%{
      opacity:0;
      transform:translateX(-100%);
    }
  }


  </style>
    <div class="sale-statistic-area mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        {{-- <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol> --}}

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="{{asset('assets/images/s1.jpeg')}}" alt="Chicago" id="preview" style="max-height: 480px;width:1024px;">
                            <div class="carousel-caption">
                              <h3>CANAL+</h3>
                              <p>Techniciens agrées!</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="{{asset('assets/images/s2.jpeg')}}" alt="Chicago" id="preview" style="max-height: 464px;width:1024px;">
                            <div class="carousel-caption">
                                <h3>CANAL+</h3>
                                <p>Techniciens agrées!</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="{{asset('assets/images/s3.jpeg')}}" alt="Chicago" id="preview" style="max-height: 464px;width:1024px;">
                            <div class="carousel-caption">
                                <h3>CANAL+</h3>
                                <p>Techniciens agrées!</p>
                            </div>
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">


                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter">{{count($techniciens)}}</span></h3>
                                <p>Techniciens agrée(s)</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div ><i class="fa fa-user-secret fa-5x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter">{{count($users)}}</span></h3>
                                <p>Utilisateurs enregistrés</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div ><i class="fa fa-users fa-5x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter">{{$numberOfUsers}}</span></h3>
                                <p>Utilisateurs connecté(s)</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div ><i class="fa fa-wifi fa-5x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter">{{count($numberOfUsers_technicien)}}</span></h3>
                                <p>Techniciens connecté(s)</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div ><i class="fa fa-user-secret fa-5x" aria-hidden="true"></i></div>
                            </div>
                        </div>

                        {{-- <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter">{{count($numberOfUsers_abonne)}}</span></h3>
                                <p>Abonnés connecté(s)</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-team" style="font-family: CanalBoldRomain">
		<div class="container">
			<!-- Start Header Section -->
			<div class="row justify-content-center text-center">
				<div class="col-md-12 col-lg-12">
					<div class="header-section">
						<h3 class="small-title">Quelques techniciens agrées</h3>
						<h2 class="title">Contacter nos techniciens en cas de panne</h2>
					</div>
				</div>
            </div>
        </div>
    </div>
<div class="container" >
    <div class="row">
    @forelse ($techniciens->take(6) as $technicien)
    <div class="card">
      <div class="img-cover"><img src="{{url('storage/' . $technicien->photo)}}"><div class="icon"><svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 9H22M12 1.5L20.9333 8.2C21.4667 8.6 21.4667 9.4 20.9333 9.8L12 16.5" stroke="black" stroke-width="3"/>
  </svg>
  </div></div>

      <div class="desc">
      <center>  <h1 style="font-weight: bold">Technicien Canal+ agrée</h1> &nbsp;<br> <br>
        {{-- <p>{{$technicien->description}}</p> --}}
        <h3> Contact 1: {{$technicien->numero_tel1}}</h3>
        <h3>Contact 2: {{$technicien->numero_tel2}}</h3>
        <h3>Contact whatsapp: {{$technicien->numero_tel_whatsapp}}</h3>
        <a href ="#"> <h1>{{$technicien->name}} &nbsp;&nbsp;{{$technicien->prenom}} </h1></a>
    </center>
      </div>
    </div>
    @empty
</div>
</div>

<center> <div class=" container alert alert-info"> Aucun Technicien pour le moment </div></center>
@endforelse

</div>


</div>
    <!-- End Email Statistic area-->
    <!-- Start Realtime sts area-->

    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')

</body>

</html>
