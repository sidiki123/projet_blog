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
										<i class="notika-icon notika-edit"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Code Editor</h2>
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
    <!-- Code Editor area start-->
    <div class="code-editor-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="nk-cd-ed-wp">
                        <textarea id="code1">
	<script>
		$(document).ready(function() {
			var usa_map = new Datamap({
				element: document.getElementById("usa_map"),
				responsive: true,
				scope: 'usa',
				fills: {
					defaultFill: "#DBDAD6",
					active: "#00c292"
				},
				geographyConfig: {
					highlightFillColor: '#00c292',
					highlightBorderWidth: 0
				},
				data: {
					NE: { fillKey: "active" },
					CA: { fillKey: "active" },
					NY: { fillKey: "active" },
				}
			});
		});
	</script>
							</textarea>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="nk-cd-ed-wp sm-res-mg-t-30">
                        <textarea id="code2">
	<script>
		$(document).ready(function() {
			var usa_map = new Datamap({
				element: document.getElementById("usa_map"),
				responsive: true,
				scope: 'usa',
				fills: {
					defaultFill: "#DBDAD6",
					active: "#00c292"
				},
				geographyConfig: {
					highlightFillColor: '#00c292',
					highlightBorderWidth: 0
				},
				data: {
					NE: { fillKey: "active" },
					CA: { fillKey: "active" },
					NY: { fillKey: "active" },
				}
			});
		});
	</script>
							</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Code Editor area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>