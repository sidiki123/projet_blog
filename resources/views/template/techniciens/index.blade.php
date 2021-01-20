@include('template.partials.header')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

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
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="container mb-5">
        <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
            <div class="container">
                <a href="https://laravel.fr/c/laravel-france"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                    <h2 class="topic-title topic-title-solved">Technicien(s) disponible(s)</h2>
            </div>
        </div>
    </div>
	<!-- Breadcomb area End-->
    <!-- Animateions area start-->
        <div class="container" >
            <div class="row">
            @forelse ($techniciens->take(6) as $technicien)
            <div class="card">
              <div class="img-cover"><img src="{{asset('storage/' . $technicien->photo)}}"><div class="icon"><svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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

            <center> <div class=" container alert alert-info"> Aucun Technicien disponible dans cette localité </div></center>
            @endforelse
            </div>

            {{-- <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="google-map-single mg-t-30">
                        <div id="map86"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="google-map-single mg-t-30">
                        <div id="map7"></div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Animateions area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>
