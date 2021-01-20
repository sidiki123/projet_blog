@extends('layouts.app')
<style>
    .contact-from{
  font-family: 'Poiret One', cursive;
  background: #3494E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EC6EAD, #3494E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EC6EAD, #3494E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

h4{
  font-weight: bold;
  margin-bottom: 2.5rem;
}
.form-wrapper{
  background: #fff;
  border-radius: 5px;
  padding: 50px;
}
.form-control, .custom-select{
  border-radius: 0px;
    color: #495057;
    background-color: #f1f1f1;
    border-color: none;


}

.form-control:focus {
    color: #495057;
    background-color: #ffffff;
    border:1px solid #b5b6b3;
    outline: 0;
    box-shadow: none;

}

.btn{
  background: #3494E6;
  border: #3494E6;
  padding: 0.6rem 3rem;
  font-weight: bold;
}
.btn:hover, .btn:focus, .btn:active, .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
  background: #3494E6;
  border: #3494E6;
  outline: 0;
}
</style>

@section('content')

<section class="contact-from pt-4 pb-4 ">
    <div class="container">
                    <div class="row">
                        <div class="col-md-7 mx-auto">
                          <div class="form-wrapper">
                            <div class="row">
                              <div class="col-md-12">
                                <h4>Enregistrer un technicien</h4>
                              </div>
                            </div>
                        <form _lpchecked="1" method="POST" action="{{route('admin.technicien.register.store')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                            <input type="text" name="name" class="form-control" placeholder="Nom" value="{{ old('name') }}" >
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="prenom" class="form-control" placeholder="Prenom" value="{{ old('prenom') }}">
                                            @error('prenom')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="identifiant" class="form-control" pattern="[0-9]{2}" value="{{ old('identifiant') }}" placeholder="Identifiant">
                                            @error('identifiant')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="numero_tel1" value="{{ old('numero_tel1') }}" class="form-control" placeholder="Numero 1" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}">
                                            @error('numero_tel1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="numero_tel2" value="{{ old('numero_tel2') }}" class="form-control" placeholder="Numero 2" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}">
                                            @error('numero_tel2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="numero_tel_whatsapp" value="{{ old('numero_tel_whatsapp') }}" class="form-control" placeholder="Numero Whatsapp" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}">
                                            @error('numero_tel_whatsapp')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="quartier_de_residence" value="{{ old('quartier_de_residence') }}" class="form-control" placeholder="Quartier de residence">
                                            @error('quartier_de_residence')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer mot de passse">
                                            @error('passsword_confirlation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <input type="text" name="rattachement" value="{{ old('rattachement') }}" class="form-control" placeholder="Rattachement">
                                            @error('rattachement')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="file" name="photo" class="form-control"value="{{ old('photo') }}" >
                                            @error('photo')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{-- <input type="text" name="ville" class="form-control" placeholder="Region"> --}}
                                            <select name="region_id" id="" class="form-control" placeholder="Region" value="{{ old('region_id') }}">
                                                @foreach ($regions as $region)
                                                <option value="{{$region->id}}">{{$region->nom}}</option>
                                                @error('region_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                  <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="ville_id" id="" class="form-control" placeholder="Ville" value="{{ old('ville_id') }}">
                                            @error('ville_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                                @foreach ($villes as $ville)
                                                <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                  <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="pays" class="form-control" placeholder="Pays" value="{{ old('pays') }}">
                                            @error('pays')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                   </div>



                                </div>
                                <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Enregister</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

      </div>
</section>
@endsection
