@include('template.partials.header')
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-app"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Tooltips</h2>
										<p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Tooltips area Start-->
    <div class="tooltips-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tooltips-inner">
                        <div class="tooltips-hd tooltips-hdn">
                            <h2>Tooltips</h2>
                            <p>Tooltips are an updated version, use CSS3 for animations, and data-attributes for local title storage.</p>
                        </div>
                        <div class="tooltips-ctn">
                            <h4>Hover over the links below to see tooltips.</h4>
                            <p>Tight pants next level <a href="#" data-toggle="tooltip" title="Another tooltip">keffiyeh</a> you probably haven't heard of them. Photo booth beard raw denim <a href="#" data-toggle="tooltip" title="Another tooltip">letterpress</a> vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel have a terry richardson vinyl <a href="#" data-toggle="tooltip" title="Another one here too">chambray</a>. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan whatever keytar, <a href="#" data-toggle="tooltip" title="Another one here too">scenester</a> farm-to-table banksy Austin twitter handle freegan cred raw denimangersa single-origin coffee viral.</p>
                        </div>
                        <div class="tooltips-static tooltips-cvn">
                            <div class="stc-tlt-hd">
								<h4>Static tooltip</h4>
								<p>Four options are available: top, right, bottom, and left aligned.</p>
							</div>
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left
                                </button>
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top
                                </button>
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom
                                </button>
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right
                                </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tooltips area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>