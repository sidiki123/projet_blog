@include('template.partials.header')
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
    <div class="container mb-5">
        <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
            <div class="container">
                <a href="https://laravel.fr/c/laravel-france"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                    <h2 class="topic-title topic-title-solved">Formations</h2>
            </div>
        </div>
    </div>
	<!-- Breadcomb area End-->
    <!-- Bar Chart area End-->
    <div class="google-map-area">
        <div class="container">

            <div class="row">
                @forelse ($formation_listes as $formation_liste)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-6">
                    @if ($formation_liste->type_de_formation_id == 1)
                    <a href="{{route('formation_detail',$formation_liste)}}"> <button class="btn btn-success ml-5" style="margin-top:1em;" >Voir plus sur la video</button> </a>
                    <video oncontextmenu="return false;" style="background-color: black;" class="mb-5 ml-5" width="480" height="480" controlsList="nodownload"  controls>
                        <source src="{{asset('storage/' . $formation_liste->fichier)}}" >
                      </video>
                    @else
                    <a href="{{route('formation_detail',$formation_liste)}}"><button class="btn btn-success ml-5" style="margin-top:1em;" >Voir plus sur la document</button> </a>
                    <iframe class="mb-5" width="480" height="480" src="{{asset('storage/' . $formation_liste->fichier)}}" frameborder="0"  ></iframe>
                    @endif

                </div>
                @empty



            </div>
            <center> <div class=" container alert alert-info"> Aucune Formation pour le moment </div></center>
            @endforelse
            </div>
        </div>
    </div>
    <!-- Bar Chart area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
    <script>
        $(document).ready(function(){
   $('#videoElementID').bind('contextmenu',function() { return false; });
});
    </script>
</body>

</html>
