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
										<i class="notika-icon notika-house"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Analytics</h2>
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
    <!-- Server time start-->
    <div class="visitor-sv-tm-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="visitor-sv-tm-int">
                        <div class="contact-hd mg-bt-ant-inner">
                            <h2>Visits by Server Time</h2>
                            <p>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</p>
                        </div>
                        <div class="visitor-sv-tm-ch">
                            <div id="visit-server-time" class="flot-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="visitor-sv-tm-int sm-res-mg-t-30">
                        <div class="contact-hd mg-bt-ant-inner server-sts-rgt">
                            <h2>Server Status</h2>
                            <p>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</p>
                        </div>
                        <div class="visitor-st-ch">
                            <div id="dynamic-chart" class="flot-chart widget-dynamic-chart ant-ctn-dyn"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="visitor-sv-tm-int sm-res-mg-t-30 tb-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="contact-hd mg-bt-ant-inner">
                            <h2>Visits Over Time</h2>
                            <p>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</p>
                        </div>
                        <div class="visitor-st-ch visitor-ov-ct">
                            <div id="visit-over-time" class="flot-chart"></div>
                            <div class="flc-visits"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Server time End-->
    <!-- Search Engine Start-->
    <div class="search-engine-area mg-t-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="search-engine-int">
                        <div class="contact-hd search-hd-eg">
                            <h2>Search Engine</h2>
                            <p>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</p>
                        </div>
                        <div class="search-eg-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Search Engine</th>
                                        <th class="text-right">Visitors</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="search-engine-img" src="img/search-engines/google.png" alt="">Google</td>
                                        <td class="text-right">3831 <i class="notika-icon notika-up-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td><img class="search-engine-img" src="img/search-engines/bing.png" alt="">Bing</td>
                                        <td class="text-right">2123 <i class="notika-icon notika-down-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td><img class="search-engine-img" src="img/search-engines/baidu.png" alt="">Baidu</td>
                                        <td class="text-right">4375 <i class="notika-icon notika-up-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td><img class="search-engine-img" src="img/search-engines/yahoo.png" alt="">Yahoo</td>
                                        <td class="text-right">4020 <i class="notika-icon notika-up-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td><img class="search-engine-img" src="img/search-engines/duckduckgo.png" alt="">DuckDuckGo</td>
                                        <td class="text-right">2064 <i class="notika-icon notika-up-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="analysis-rd-mg"><img class="search-engine-img" src="img/search-engines/yandex.png" alt="">Yandex</td>
                                        <td class="text-right analysis-rd-mg">936 <i class="notika-icon notika-down-arrow"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="search-engine-int sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                        <div class="contact-hd search-hd-eg">
                            <h2>Referrer Websites</h2>
                            <p>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</p>
                        </div>
                        <div class="search-eg-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Website</th>
                                        <th class="text-right">Visitors</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>themeforest.net</td>
                                        <td class="text-right">620 <i class="notika-icon notika-up-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td>codecanyon.net</td>
                                        <td class="text-right">432 <i class="notika-icon notika-down-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td>google.com</td>
                                        <td class="text-right">8702 <i class="notika-icon notika-up-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td>yahoo.com</td>
                                        <td class="text-right">683 <i class="notika-icon notika-up-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td>youtube.com</td>
                                        <td class="text-right">253 <i class="notika-icon notika-down-arrow"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="analysis-rd-mg">bing.com</td>
                                        <td class="text-right analysis-rd-mg">3018 <i class="notika-icon notika-up-arrow"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="search-engine-int sm-res-mg-t-30 tb-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="contact-hd search-hd-eg">
                            <h2>Site Performance</h2>
                            <p>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</p>
                        </div>
                        <div class="search-eg-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Work Flow</th>
                                        <th class="text-right">Counter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>External Backlinks</td>
                                        <td class="text-right">
                                            <h4>54,302</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Page Speed Score</td>
                                        <td class="text-right">
                                            <h4>87</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Citation Flow</td>
                                        <td class="text-right">
                                            <h4>987</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mozrank</td>
                                        <td class="text-right">
                                            <h4>9.43</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Domain Authority</td>
                                        <td class="text-right">
                                            <h4>455</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="analysis-rd-mg">Alexa Rank</td>
                                        <td class="text-right analysis-rd-mg">
                                            <h4>342,234</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('template.partials.footer_script')
</body>

</html>
