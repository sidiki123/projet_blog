@include('template.partials.header')

<div class="container mb-5">
    <div class="category-banner pb-5 pt-5" style="background-color: #3a980b; color: #FFF">
        <div class="container">
            <a href="#"><span class="badge mb-5" style="border: 1px solid #FFF; color: #FFF">Le technicien Agrégé</span></a>
                <h2 class="topic-title topic-title-solved">Nous Contacter</h2>
        </div>
    </div>
</div>
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
		<div class="container">
			<div class="row ">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1 style="text-align: center;font-weight:1000;" class="mt-4 mb-4">Des idées ou des questions pour Canal+ ??</h1>
				</div>
			</div>
		</div>
	<!-- Breadcomb area End-->
    <!-- Typography area start-->
    <div class="container">
        <div class="row">
            <div class="col-md10 col-md-offset-1 col-sm-10 col-sm-offset-0">
            <form action="{{route('contact_form')}}" method="POST">
                @csrf
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                        <label for="name" class="control-label">Nom </label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                        {!!$errors->first('name','<span class="help-block">:message </span>')!!}
                    </div>

                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                        <label for="email" class="control-label">Adresse mail </label>
                        <input type="email" name="email" id="email" class="form-control" required="required">
                        {!!$errors->first('email','<span class="help-block">:message </span>')!!}
                    </div>

                    <div class="form-group {{$errors->has('telephone') ? 'has-error' : ''}}">
                        <label for="email" class="control-label">Numero de téléphone </label>
                        <input type="tel" name="telephone" id="telephone" class="form-control" required="required">
                        {!!$errors->first('telephone','<span class="help-block">:message </span>')!!}
                    </div>

                    <div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
                        <label for="message" class="control-label">Message </label>
                        <textarea name="message" id="message" cols="10" rows="10" class="form-control" required="required"></textarea>
                        {!!$errors->first('message','<span class="help-block">:message </span>')!!}
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Typography area End-->
    <!-- Start Footer area-->
    @include('template.partials.footer_script')
</body>

</html>
