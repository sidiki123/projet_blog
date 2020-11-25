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
										<h2>Popovers</h2>
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
    <!-- Popovers area Start-->
    <div class="popover-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="popovers-list">
                        <div class="popovers-hd">
                            <h2>Popovers</h2>
                            <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
                        </div>
                        <div class="popovers-sgn">
                            <h4>Four options are available: top, right, bottom, and left aligned.</h4>
                            <div class="popover-wp">
                                <div class="popovers-pr-sg top">
                                    <div class="popover-arrow"></div>
                                    <h5>Popover Top</h5>
                                    <p>Sed posuere consectetur est at lobortis crylia. Aenean eu leo quam. Pellentesque ornarefa sem lacinia quam venenatis.</p>
                                </div>
                                <div class="popovers-pr-sg right">
                                    <div class="popover-arrow"></div>
                                    <h5>Popover Right</h5>
                                    <p>Sed posuere consectetur est at lobortis crylia. Aenean eu leo quam. Pellentesque ornarefa sem lacinia quam venenatis.</p>
                                </div>
                                <div class="popovers-pr-sg bottom popovers-pr-sg-mg-n">
                                    <div class="popover-arrow"></div>
                                    <h5>Popover Bottom</h5>
                                    <p>Sed posuere consectetur est at lobortis crylia. Aenean eu leo quam. Pellentesque ornarefa sem lacinia quam venenatis.</p>
                                </div>
                                <div class="popovers-pr-sg left popovers-pr-sg-mg-n sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                                    <div class="popover-arrow"></div>
                                    <h5>Popover Left</h5>
                                    <p>Sed posuere consectetur est at lobortis crylia. Aenean eu leo quam. Pellentesque ornarefa sem lacinia quam venenatis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="popover-cl popover-ctn-mg mg-t-20">
                            <h5>Popover on Click</h5>
                            <div class="popover-cl-pro">
                                <button class="btn btn-primary" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">Top
									</button>
                                <button class="btn btn-primary" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">Right
									</button>
                                <button class="btn btn-primary" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">Bottom
									</button>
                                <button class="btn btn-primary" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title"> Left
									</button>
                            </div>
                        </div>
                        <div class="popover-cl popover-ctn-mg mg-t-20">
                            <h5>Popover on Hover</h5>
                            <div class="popover-cl-pro">
                                <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">Top
									</button>
                                <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">Right
									</button>
                                <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">Bottom
									</button>
                                <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">Left
									</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popovers area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>