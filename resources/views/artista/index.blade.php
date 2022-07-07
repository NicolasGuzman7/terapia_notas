@extends('layouts.app8')

@section('title', 'Artistas')

@section('content')

<div class="container text-center">
<div class="row">
	@foreach($artistas as $artista)
		<div class="col-sm-4">
			<div class="card text-center" style="width: 18rem; margin-top: 70px;">
		<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$artista->avatar}}" alt="">
	  			<div class="card-body">
	    			<h5 class="card-title">{{$artista->name}}</h5>
	    			<p class="card-text">{{$artista->detail}}</p>
	    			<a href="/artista/{{$artista->slug}}" class="btn btn-primary">Ver Mas</a>
				 </div>
	  		</div>
		</div>

		@endforeach

	</div>
</div>
	

@endsection