@include('template.partials.header')
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="container mb-5">
        <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
            <div class="container">
                <a href="#"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                    <h2 class="topic-title topic-title-solved">Selectionner votre region</h2>
            </div>
        </div>
    </div>
	<!-- Breadcomb area End-->
    <!-- Animateions area start-->
    <div class="google-map-area">
        <div class="container">

            <div class="row">
                @foreach ($regions as $region)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-5 ">
                    <div class="google-map-single bg-dark" >
                        <div id="map2" class="h-100 row align-items-center"><i class="notika-icon notika-ip-locator"  style="color:white;font-weight:bold;font-size:23em;text-align:center;"></i>
                        <div>
                        <h1 style="color: white;">Region du <a href="{{route('page_ville',$region)}}" style="text-decoration:none;color:greenyellow;">{{$region->nom}}</a></h1>
                        </div>

                        </div>
                    </div>
                </div>
                @endforeach
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
