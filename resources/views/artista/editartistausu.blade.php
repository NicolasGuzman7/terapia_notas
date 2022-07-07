@extends('layouts.appnavbarnew')

@section('title', 'Editar Artista')

@section('content')
 

    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <br>                            
                            <h2>{{$artista->name}}</h2>
                        </div>
    
                    </div>
                </div>
                
        </div>
        </div>
    </section>

<div class="container" style="margin-top: 100px;border-style: outset; border-color: #8869DB; border-width: 7px;">

	<form class="form-group" method="POST" action="/editartista/{{$artista->slug}}/editusu" enctype="multipart/form-data">
		@method("PUT")
		@csrf
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" value="{{$artista->name}}" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Detalles</label>
			<input type="text" name="detail" value="{{$artista->detail}}" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Numero de Contacto</label>
			<input type="text" name="telefono" value="{{$artista->telefono}}" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Mail de Contacto</label>
			<input type="text" name="mail" value="{{$artista->mail}}" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Instagram</label>
			<input type="text" name="instagram" value="{{$artista->instagram}}" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Facebook</label>
			<input type="text" name="facebook" value="{{$artista->facebook}}" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Avatar</label>
			<input type="file" name="avatar">
		</div>

		<button type="submit" class="btn btn-primary">Actualizar</button>
		
		</form>
	
	</div>
	<br>
	<br>
	<br>

@endsection