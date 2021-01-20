@include('template.partials.header')
<div class="container mb-5">
    <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
        <div class="container">
            <a href="https://laravel.fr/c/laravel-france"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                <h2 class="topic-title topic-title-solved">Rechercher un technicien Canal +</h2>
        </div>
    </div>
</div>

@if (count($errors)>0)
<div class="alert alert-danger">
    <ul class="mb-0 mt-0">
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>

</div>

@endif
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-search"></i>
                                    </div>

									<div class="breadcomb-ctn">
                                    <form action="{{route('technicien.search')}}" method="GET">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h2>Entrer l'idetifiant du technicien à rechercher</h2>
                                            <div class="form-group ic-cmp-int float-lb floating-lb">

                                                <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="q">
                                                </div>
                                                <div class="form-ic-cmp">
                                                    <button type="submit" class="btn btn-lightgreen"> <i class="notika-icon notika-search"></i></button>

                                                </div>

                                            </div>
                                        </div>
                                    </form>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Google Map area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>
