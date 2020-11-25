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
										<h2>Notifications</h2>
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
    <!-- Notification area Start-->
    <div class="notification-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="notification-inner">
                        <div class="contact-hd notification-hd">
                            <h2>Notification</h2>
                            <p>Animated Alerts with custome types and alignments</p>
                        </div>
                        <div class="notification-demo">
                            <h2>Notification</h2>
                            <a href="" class="btn btn-info" data-type="inverse" data-from="top" data-align="left">Top Left</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-from="top" data-align="right">Top Right</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-from="top" data-align="center">Top Center</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-from="bottom" data-align="left">Bottom Left</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-from="bottom" data-align="right">Bottom Right</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-from="bottom" data-align="center">Bottom Center</a>
                        </div>
                        <div class="notification-demo mg-t-20">
                            <h2>Type</h2>
                            <a href="" class="btn btn-inverse" data-type="inverse">Inverse</a>
                            <a href="" class="btn btn-info" data-type="info">Info</a>
                            <a href="" class="btn btn-success" data-type="success">Success</a>
                            <a href="" class="btn btn-warning" data-type="warning">Warning</a>
                            <a href="" class="btn btn-danger" data-type="danger">Danger</a>
                        </div>
                        <div class="notification-demo animate-nt mg-t-20">
                            <h2>Animations</h2>
                            <a href="" class="btn btn-info" data-type="inverse" data-animation-in="animated fadeIn" data-animation-Out="animated fadeOut">Fade In</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-animation-in="animated fadeInLeft" data-animation-Out="animated fadeOutLeft">Fade In Left</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-animation-in="animated fadeInRight" data-animation-Out="animated fadeOutRight">Fade In Right</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-animation-in="animated fadeInUp" data-animation-Out="animated fadeOutUp">Fade In Up</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-animation-in="animated fadeInDown" data-animation-Out="animated fadeOutDown">Fade In Down</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-animation-in="animated bounceIn" data-animation-Out="animated bounceOut">Bounce In</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-animation-in="animated bounceInLeft" data-animation-Out="animated bounceOutLeft">Bounce In Left</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-animation-in="animated bounceInRight" data-animation-Out="animated bounceOutRight">Bounce In Right</a>
                            <a href="" class="btn btn-info" data-type="inverse" data-animation-in="animated flipInX" data-animation-Out="animated flipOutX">Flip In X</a>
                            <a href="" class="btn btn-info nt-mg-btm-0" data-type="inverse" data-animation-in="animated flipInY" data-animation-Out="animated flipOutY">Flip In Y</a>
                            <a href="" class="btn btn-info nt-mg-btm-0" data-type="inverse" data-animation-in="animated rotateIn" data-animation-Out="animated rotateOut">Rotate In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Notification area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>