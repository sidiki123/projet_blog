@include('template.partials.header')
    <!-- Main Menu area End-->
    <!-- Breadcomb area Start-->
    <div class="container mb-5">
        <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
            <div class="container">
                <a href="#"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                    <h2 class="topic-title topic-title-solved">A propos</h2>
            </div>
        </div>
    </div>


	<!-- Breadcomb area End-->
    <!-- Button area Start-->
    <div class="about about--page spad mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about__pic">
                        <img src="{{asset('assets/images/s2.jpeg')}}" alt="Chicago">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                        </div>
                        <p>At vero eos et accusamus et iusto odi odgnissimos ducimus qui blanditiis praesentium volup
                            tatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi quod
                            justo pro an.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Button area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>
