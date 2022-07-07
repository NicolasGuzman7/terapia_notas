@extends('layouts.appnavbarnew')
@section('title','artistass')
    


@section('content') 

    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <br>                            
                            <h2>Nuestros Integrantes</h2>
                        </div>
    
                    </div>
                </div>
                
        </div>
        </div>
    </section>


<div class="container" style="margin-bottom: 50px;">
<div class="row">
    @foreach($artistas as $artista)
       <div class="col-sm-4" style="">
            <div class="card text-center" style="width: 20rem; margin-top: 40px;">
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$artista->avatar}}" alt="">
                <div class="card-body" style="height: 400px;" >
                    <h5 class="card-title">{{$artista->name}}</h5>
                    <p class="card-text" >{{$artista->detail}}</p>
                    <br>
                    <a href="/vermasartista/{{$artista->slug}}" class="btn btn-primary">Ver Mas</a>
                 </div>
            </div>

        </div>

        @endforeach
    </div>
</div>

        
        
        
@endsection

  
