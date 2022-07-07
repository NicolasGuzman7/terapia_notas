@extends('layouts.app9')
@section('title','usuarios')
    

@section('content')

<div class="container text-center">
<div class="row">
    @foreach($usuarios as $usuario)
       <div class="col-sm" style="margin-top: 70px;">
            <div class="card text-center" style="width: 20rem; margin-top: 40px;">
        {{-- <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$artista->avatar}}" alt=""> --}}
                <div class="card-body">
                	
                    <h6 class="card-title">Nombre de usuario:</h6>
                    <p class="card-text" >{{$usuario->nombre}}</p>
                    <h6 class="card-title">Correo Electronico:</h6>
                    <p class="card-text" >{{$usuario->email}}</p>
                    <h6 class="card-title">Fecha de Creacion:</h6>
                    <p class="card-text" >{{$usuario->created_at}}</p>

                   	{{-- <a href="{{route('admin.usuarios.edit', $usuario)}}" class="btn btn-primary">Editar</a> --}}
                
                    <form action="{{route('admin.usuarios.destroy', $usuario->id)}}" 
                    class="d-inline formulario-eliminar" method="POST">

                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                    
                 </div>
            </div>
        </div>

        @endforeach
    </div>

</div>
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

