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
										<h2>Dialogs</h2>
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
    <!-- Dialog area Start-->
    <div class="dialog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner">
                        <div class="contact-hd dialog-hd">
                            <h2>Basic Dialog Example</h2>
                            <p>A beautiful replacement for Javascript's boring dialog Alert</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <button class="btn btn-info" id="sa-basic">Click me</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner sm-res-mg-t-30">
                        <div class="contact-hd dialog-hd">
                            <h2>Dialog title with a text under</h2>
                            <p>A beautiful replacement for Javascript's boring dialog Alert</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <button class="btn btn-info" id="sa-title">Click me</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner mg-t-30">
                        <div class="contact-hd dialog-hd">
                            <h2>Dialog success message!</h2>
                            <p>A beautiful replacement for Javascript's boring dialog Alert</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <button class="btn btn-info" id="sa-success">Click me</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner mg-t-30">
                        <div class="contact-hd dialog-hd">
                            <h2>Dialog warning message</h2>
                            <p>A warning message, with a function attached to the "Confirm"-button...</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <button class="btn btn-info" id="sa-warning">Click me</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner mg-t-30">
                        <div class="contact-hd dialog-hd">
                            <h2>Dialog passing a parameter</h2>
                            <p>By passing a parameter, you can execute something else for "Cancel".</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <button class="btn btn-info" id="sa-params">Click me</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner mg-t-30">
                        <div class="contact-hd dialog-hd">
                            <h2>Dialog Image Header</h2>
                            <p>A message with custom Image Header</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <button class="btn btn-info" id="sa-image">Click me</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="dialog-inner mg-t-30">
                        <div class="contact-hd dialog-hd">
                            <h2>Dialog auto close timer</h2>
                            <p>A message with auto close timer.</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <button class="btn btn-info" id="sa-close">Click me</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dialog area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>