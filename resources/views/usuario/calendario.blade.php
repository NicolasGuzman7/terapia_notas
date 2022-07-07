@extends('layouts.appnavbarnew')
@section('title', 'Calendario')

@section('content')

@section('css')

<link href="css/stylec.css" rel="stylesheet">
    <link href="css/style-color.css" rel="stylesheet">
@endsection


  
  <body>

<section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <h2 style="margin-top: 50px">Calendario de Eventos</h2>
                        </div>
    
                    </div>
                </div>
                
        </div>
    </section>



    <div class="container">

<div class="events parallax-three pad" id="events">
        <div class="container">
          <!-- default heading -->
          <div class="default-heading-shadow">
            <!-- heading -->
            <h2>Proximos Eventos</h2>
          </div>
          <!-- events element -->
          <div class="events-element">
            <div class="row">

@foreach($events as $evento)

              <div class="col-md-6 col-sm-6">
                <!-- event item -->
                <div class="events-item ">
                  <!-- image container -->
                  <div class="figure">
                    <!-- event date -->
                    <div class="event-date">
                      <span class="emonth">{{$evento->fecha}}</span>
                      <div class="clearfix"></div>
                      <!-- time -->
                      <span class="etime">{{$evento->hora}}</span>
                    </div>
                    <!-- event location -->
                    <span class="event-location"><i class="fa fa-map-marker"></i>{{$evento->lugar}}</span>
                    <!-- image -->
                    <img class="img-responsive " style="width: 320px; height: 320px;" src="images/{{$evento->imagenevento}}" alt="" />
                    <!-- image hover -->
                    <div class="img-hover">
                      <!-- hover icon -->
                    </div>
                  </div>
                  <!-- event information -->
                  <div class="event-info">
                    <!-- event title -->
                    <h3>{{$evento->titulo}}</h3>
                    <!-- horizontal line --><hr />
                    <!-- paragraph -->
                    <p>{{$evento->descripcion}} </p>
                    <!-- buy ticket button link -->
                    <a href="calendario/details/{{$evento->id}}" class="btn btn-lg btn-theme">Ver Más</a>
                  </div>
                </div>
              </div>
              
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
    
</div>



      

<div class="container" style="border:outset; border-width: 7px; border-color: #8869DB; margin-bottom: 50px;">
      <h1 style="margin-top: 25px; color: #8869DB;">Suscribete para recibir informacion de todos nuestros eventos</h1>

        <form action="{{url('/newsletter')}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <br>
            <input id="email" type="text" name="email" placeholder="Correo Electronico" class="form-control"></input>
            </div>
            <div class="form-group">
            <input type="submit" class="form-control" style="margin-bottom: 150px"></input>
            </div>

          
</form>
</div>
@endsection