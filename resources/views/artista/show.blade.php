@extends('layouts.app8')

@section('title', 'Artista')

@section('content')
<div class="container" style="margin-top: 100px;">
	<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$artista->avatar}}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{$artista->name}}</h5>
	<p>{{$artista->detail}}</p>
	<a href="/artista/{{$artista->slug}}/ver" class="btn btn-primary">Editar</a>
</div>
</div>
@endsection
