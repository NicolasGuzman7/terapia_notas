@extends('layouts.app7')

@section('title', 'Crear Evento')

@section('content')
 
    <style>
    body{
      font-family: 'Exo', sans-serif;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #EE192D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
    </style>

  <body>

    <div class="container" style="border-style: inset; border-color: #8869DB; border-width: 7px; margin-top: 125px;">
      <div style="height:50px"></div>
      <p class="lead">
      <h3>Evento</h3>
      <p>Formulario de evento</p>
      <hr>

      @if (count($errors) > 0)
        <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <ul>
          @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
         </ul>
        </div>
       @endif
       @if ($message = Session::get('success'))
       <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
       </div>
       @endif


      <div class="col-md-6">
        <form class="form-group" action="{{ asset('/calendarioadmin/create/') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo">
          </div>
          <div class="form-group">
            <label>Descripcion del Evento</label>
            <input type="text" class="form-control" name="descripcion">
          </div>
          <div class="form-group">
            <label>Fecha</label>
            <input type="date" class="form-control" name="fecha">
          </div>
          <div class="form-group">
            <label>Hora</label>
            <input type="time" class="form-control" name="hora">
          </div>
          <div class="form-group">
            <label>Lugar</label>
            <input type="text" class="form-control" name="lugar">
          </div>
          <div class="form-group" style="margin-top: 50px">
      <label>Imagen Evento</label>
      <input type="file" name="imagenev">
    </div>
          <br>
          <input type="submit" class="btn btn-info" value="Guardar">
        </form>
      </div>


      <!-- inicio de semana -->



  </body>

@endsection