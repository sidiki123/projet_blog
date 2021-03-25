@include('template.partials.header')
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
    <div class="container mb-5">
        <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
            <div class="container">
                <a href="#"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                    <h2 class="topic-title topic-title-solved">Formations</h2>
            </div>
        </div>
    </div>
	<!-- Breadcomb area End-->
    <!-- Bar Chart area End-->
    <div class="google-map-area">
        <div class="container">

            <div class="row">
                @foreach ($formations as $formation)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-5 ">
                    <div class="google-map-single bg-dark" style="background-color: black;" >
                        <div id="map2" class="h-80 row align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;<i class="notika-icon notika-eye"  style="color:white;font-weight:bold;font-size:15em;text-align:center;"></i>
                        <div>
                        <h1 style="color: white;"> &nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('formation_liste',$formation)}}" style="text-decoration:none;color:greenyellow;">{{$formation->nom_formation}}</a></h1>
                        </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Bar Chart area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>
