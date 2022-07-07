@extends('layouts.app7')
@section('title', 'Evento')

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

    <div class="container">
      <div style="height:50px"></div>
      <p class="lead">
      <h3>Evento</h3>
      <p>Detalles de evento</p>
      <hr>
    </p>
  </div>


<div class="container text-align">
      <div class="col-md-6">
          <div class="fomr-group">
            <h4>Titulo</h4>
            {{ $event->titulo }}
          </div>
          <br>
          <div class="fomr-group">
            <h4>Descripcion del Evento</h4>
            {{ $event->descripcion }}
          </div>
          <br>
          <div class="fomr-group">
            <h4>Fecha</h4>
            {{ $event->fecha }}
          </div>
          <br>
        </form>
        <a class="btn btn-warning"  href="{{ asset('/calendarioadmin') }}">Atras</a>
        <form action="/calendarioadmin/delete/{{$event->id}}" class="d-inline formulario-eliminar" method="POST">

                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
      </div>
</div>

</body>
@endsection


@section('js')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if(session('eliminar') == 'ok')

<script>
    
     Swal.fire(
      'Eliminado!',
      'La Imagen ha sido Eliminada!',
      'success'
    )

</script>

@endif

    <script>


    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();
    
    Swal.fire({
  title: 'Estas Seguro?',
  text: "No podras revertir los cambios!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar!',
  cancelButtonText: 'No, Mantener!'
}).then((result) => {
  if (result.isConfirmed) {
   
    this.submit();
  }
})

}); 

</script>

@endsection