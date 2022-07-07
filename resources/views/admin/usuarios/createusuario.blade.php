@extends('layouts.app9')

@section('title', 'Create Usuario')

@section('content')

<div class="container" style="margin-top: 75px">
<form class="form-group" method="POST" action="{{route('admin.usuarios.store')}}">
		@csrf

<div class="form-group" style="margin-top: 50px;">
			<label for="">Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>

<div class="form-group" >
			<label for="">Correo Electronico</label>
			<input type="text" name="email" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="password" name="password" class="form-control">
		</div>

		<label for="">Tipo de Usuario</label>
		    <select class="custom-select" name="role">
    	{{-- <option selected></option> --}}
    	<option value="artista">Artista</option>
    	<option value="usuario">Usuario corriente</option>
  			</select>

		<div class="form-group" style="margin-top: 25px">
			<label for="">Id de artista</label>
			<input type="text" name="idartista" class="form-control" placeholder="Introducir el id designado a el artista">
		</div>

		<button type="submit" style="margin-top: 25px" class="btn btn-success">Guardar</button>
	</form>
</div>
@endsection