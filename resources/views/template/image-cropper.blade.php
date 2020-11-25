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
										<h2>Image Cropper</h2>
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
    <!-- Image Cropper area Start-->
    <div class="images-cropper-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="image-cropper-wp">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="image-crop">
                                    <img src="img/cropper/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="preview-img-pro-ad">
                                    <div class="maincrop-img">
                                        <div class="image-crp-int">
                                            <h4>Preview image</h4>
                                            <div class="img-preview img-preview-custom"></div>
                                        </div>
                                        <div class="image-crp-img">
                                            <h4>Comon method</h4>
                                            <p>You can upload new image to crop.</p>
                                            <div class="btn-group images-cropper-pro">
                                                <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
														<input type="file" accept="image/*" name="file" id="inputImage" class="hide"> Upload new image
													</label>
                                                <label title="Donload image" id="download" class="btn btn-primary">Download</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cp-img-anal">
                                        <h4>Other method</h4>
                                        <p>
                                            You may set cropper options with <code>$(image}).cropper(options)</code>
                                        </p>
                                        <div class="btn-group images-action-pro">
                                            <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                            <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                            <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                            <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                            <button class="btn btn-warning img-cropper-cp-t" id="setDrag" type="button">New crop</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Cropper area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>