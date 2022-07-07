@extends('layouts.appnavbarnew')

@section('title', 'Artista')

@section('content')

@section('css')

<link href="{{ env('APP_URL', '') }}/css/lightbox.css" rel="stylesheet"/>

@endsection




<section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title "
                        	style="margin-top: 25px;">
                            <h2>{{$artista->name}}</h2>
                        </div>
    
                    </div>
                </div>
                
        </div>
    </div>
    </section>


<div class="container text-center" style="margin-top: 50px;">


@if (Auth::check() && Auth::user()->idartista == $artista->id)
           
  <a href="/editartista/{{$artista->slug}}" class="btn btn-warning">Editar</a>
            
        

{{-- @if(user Auth)
@elseif(Auth::user()->idartista == $artista->id)
    @endif --}}


@endif
</div>





    <div class="text-center" style="">
	<img style="height: 320px; width: 320px; background-color: #EFEFEF; margin: 20px; margin-top: 100px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$artista->avatar}}" alt="">
	<div class="text-center" style="margin-bottom: 50px;">
		<br>
		<br>
		<h1 class="card-title">{{$artista->name}}</h1>
		<br>
		<br>
		<div class="container">
	<h3>{{$artista->detail}}</h3>
	</div>
	<br>
	<br>
	<br>


	<img src="{{ env('APP_URL', '') }}/images/grafobaner.png">
	<br>
	<a href="https://www.instagram.com/{{$artista->instagram}}"><img src="{{ env('APP_URL', '') }}/images/instagram.png" style="margin-right: 50px;">

	<a href="https://www.facebook.com/{{$artista->facebook}}"><img src="{{ env('APP_URL', '') }}/images/facebook.png">
	
	</div>

<br>
<br>
<img src="{{ env('APP_URL', '') }}/images/grafobaner2.png">
	
	

	<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="row">
            <div class="col">
						<div class="card-columns">
								<a href="{{ env('APP_URL', '') }}/images/{{$artista->imagenuno}}" data-lightbox="roadtrip"><img src="{{ env('APP_URL', '') }}/images/{{$artista->imagenuno}}" width="480" height="320" style="border:inset; border-width:10px; border-color: #100B1E;"></a>

								<a href="{{ env('APP_URL', '') }}/images/{{$artista->imagendos}}" data-lightbox="roadtrip"><img src="{{ env('APP_URL', '') }}/images/{{$artista->imagendos}}" width="480" height="320" style="border:inset; border-width:10px; border-color: #100B1E;"></a>

								<a href="{{ env('APP_URL', '') }}/images/{{$artista->imagentres}}" data-lightbox="roadtrip"><img src="{{ env('APP_URL', '') }}/images/{{$artista->imagentres}}" width="480" height="320" style="border:inset; border-width:10px; border-color: #100B1E;"></a>




								
                                </div>
                            </div>
                        </div>
                    </div>


<img src="{{ env('APP_URL', '') }}/images/grafobaner3.png">
	<br>
	<br>

<div class="main-block" style="margin-bottom: 100px;">
      
     
	<h2 style="margin-top: 10px" class="fas fa-phone">  Numero De Telefono</h2>
	<br>
	<h3 style="margin-top: 15px; color: #A92A51;">{{$artista->telefono}}</h3>
	<h2 style="margin-top: 25px" class="fas fa-envelope">  Correo Electronico</h2>
	<br>
	<h3 style="margin-top: 15px; color: #A92A51;">{{$artista->mail}}</h3>   


      </div>
	
<img src="{{ env('APP_URL', '') }}/images/grafobaner4.png">
</div>

</div>



	<div class="text-center">
		
		<iframe src="{{$artista->spotify}}" width="1200" height="600" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
	</div>
	




     

@section('js')

<script src="{{ env('APP_URL', '') }}/js/lightbox.js"></script>

@endsection



@endsection	



    
                                    