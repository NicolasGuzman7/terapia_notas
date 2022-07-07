@extends('layouts.app8')

@section('title', 'ArtistaCreate')

@section('css')

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
  
<link href="css/styles5.css" rel="stylesheet">

@endsection

@section('content')

<div class="container" style="margin-top: 100px; margin-bottom: 50px; border-style: inset; border-color: #A92A51; border-width: 7px;">
	<form class="form-group" method="POST" action="/artista/guardado" enctype="multipart/form-data">
		@csrf

		<h3 style="color: #A92A51" class="text-center">Crear artista</h3>
		<div class="form-group" style="margin-top: 50px">
			<label for="">Avatar</label>
			<input type="file" name="avatar">
		</div>

		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Slug</label>
			<input type="text" name="slug" class="form-control">
		</div>

		<div class="form-group">
    	<label for="">Resumen del artista</label>
    	<textarea class="form-control" name="detail" placeholder="Intenta ser lo mas general posible"  rows="3"></textarea>
  		</div>

  		<div class="form-group">
    	<label for="">Biografia</label>
    	<textarea class="form-control" name="biografia"  rows="5"></textarea>
  		</div>

		    {{-- <div class="form-group">
			<label for="">Detalles</label>
			<input type="text-area" rows="3" name="detail" class="form-control">
		</div> --}}

		<div class="form-group">
			<label for="">Instagram</label>
			<input type="text" name="instagram" class="form-control" placeholder="Introducir sin @">
		</div>

		<div class="form-group">
			<label for="">Facebook</label>
			<input type="text" name="facebook" class="form-control" placeholder="Introducir lo que esta despues de https://www.facebook.com/">
		</div>

		<div class="form-group">
			<label for="">Numero De Contacto</label>
			<input type="text" name="telefono" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Mail De Contacto</label>
			<input type="text" name="mail" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Spotify</label>
			<input type="text" name="spotify" class="form-control" placeholder="Introducir con el siguiente formato : https://open.spotify.com/embed/playlist/...">
		</div>

		<div class="form-group" style="margin-top: 50px">
			<label for="">Imagen Uno</label>
			<input type="file" name="imagenuno">
		</div>
		<div class="form-group" style="margin-top: 50px">
			<label for="">Imagen Dos</label>
			<input type="file" name="imagendos">
		</div>
		<div class="form-group" style="margin-top: 50px">
			<label for="">Imagen Tres</label>
			<input type="file" name="imagentres">
		</div>
		

		
		<button type="submit" style="margin-top: 25px;" class="btn btn-primary">Guardar</button>
		
		</form>

	</div>
	
<br>
<br>
@endsection
