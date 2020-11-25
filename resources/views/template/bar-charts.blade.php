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
										<i class="notika-icon notika-bar-chart"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Bar Charts</h2>
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
    <!-- Bar Chart area End-->
    <div class="bar-chart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp">
                        <canvas height="140vh" width="180vw" id="barchart1"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp sm-res-mg-t-30 chart-display-nn">
                        <canvas height="140vh" width="180vw" id="barchart2"></canvas>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp mg-t-30 chart-display-nn">
                        <canvas height="140vh" width="180vw" id="barchart3"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp mg-t-30 chart-display-nn">
                        <canvas height="140vh" width="180vw" id="barchart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bar Chart area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>