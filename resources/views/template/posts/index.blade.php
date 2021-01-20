@include('template.partials.header')
<div class="container mb-5">
    <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
        <div class="container">
            <a href="https://laravel.fr/c/laravel-france"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                <h2 class="topic-title topic-title-solved">Operations techniques </h2>
        </div>
    </div>
</div>
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
    @forelse ($posts as $post)
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-settings"></i>
									</div>
									<div class="breadcomb-ctn align-items-center">
										<h2 ><a href="{{route('technicien.posts.show',$post)}}" style="color: black; font-weight:900;"> {{$post->title}} </a></h2>
										{{-- <p class="d-inline-block">{{$post->content}}</p> --}}
                                        {{-- <span class="bread-ntd" style="color:red;font-size:20px;">Voir plus</span> --}}
                                        <div class="d-flex justify-content-between align-items-center" style="margin-top:15px;">
                                            <small>Posté le <span style="color:red; font-weight:bold;"> {{$post->created_at->format('d/m/Y à H:m')}} </span> par </small>
                                            <span class="badge badge-danger" style="background-color:#0275d8;">{{$post->postedBy->name}} </span>
                                            <h3 class="badge badge-danger" style="background-color:#0275d8;"><i style="font-weight: bold;font-size:10px;" class="notika-icon notika-eye"></i> &nbsp;&nbsp; {{$post->view_count}} </h3>
                                        </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
								<a href="{{route('technicien.posts.show',$post)}}"> <button data-toggle="tooltip" data-placement="left" title="Repondre" class="btn "><i class="notika-icon notika-next"></i></button> </a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
    </div>
    

                    @empty
             <center> <div class=" container alert alert-info"> Aucun post pour le moment </div></center>
                    @endforelse

    <div class="d-flex justify-content-center mt-3">
        {{$posts->links()}}
    </div>


    <!-- Bar Chart area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>
