@extends('layouts.app6')

@section('title', 'Galeria Admin')

@section('content')

<div class="container" style="margin-top: 75px">
		<div class="row">
			<div class="col">
				<div class="card-columns">
					@foreach ($files as $file)
								<div class="card">
									<img class="card-img-top" src="{{asset($file->url)}}" alt="">
									<div class="card-footer">
										<a href="{{route('admin.files.edit', $file)}}" class="btn btn-primary">Editar</a>
										<form action="{{route('admin.files.destroy', $file)}}" class="d-inline formulario-eliminar" method="POST">

											@method('DELETE')
											@csrf
											<button type="submit" class="btn btn-danger">Eliminar</button>
										</form>
									</div>
							</div>	
					@endforeach
					</div>

					{{$files->links()}}

				</div>
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