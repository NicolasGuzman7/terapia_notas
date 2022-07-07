@extends('layouts.appnavbarnew')
@section('title', 'Evento')

@section('content')




  <body>


    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <h2 style="margin-top: 50px">{{$event->titulo}}</h2>
                        </div>
    
                    </div>
                </div>
                
        </div>
    </section>

    
  


   
<div class="container">
        
<p>

  <br>
  <br>
  <br>
        <img src="{{ env('APP_URL', '') }}/images/{{$event->imagenevento}}"

     width="600"
     height="480"
     align="right" 

     style="margin-left: 200px; align-content: right; margin-top: 100px; border:outset; border-color: #8869DB; border-width: 7px; ">
   <div class="form-group">
            <h3>Titulo:</h3>
            <br>
            {{ $event->titulo }}
          </div>
          <br>
          <div class="form-group">
            <h3>Descripcion del Evento:</h3>
            <br>
            {{ $event->descripcion }}
          </div>
          <br>
          <div class="form-group">
            <h3>Fecha:</h3>
            <br>
            {{ $event->fecha }}
          </div>
          <br>
          <div class="form-group">
            <h3>Hora:</h3>
            <br>
            {{ $event->hora }}
          </div>
          <br>
          <div class="form-group">
            <h3>Lugar:</h3>
            <br>
            {{ $event->lugar }}
          </div>
          <br>
        </form>
        <a class="btn btn-danger"  href="{{ asset('/calendario') }}">Atras</a>
</p>
<br>
<br>
<br>
<br>


          
</div>


</body>
@endsection