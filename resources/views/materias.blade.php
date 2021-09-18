@extends('layouts.app')

@section('content')
<div class="container"> 
    <br>
    <br>
    <p>Materias</p>


    <div class="table table-striped">
        <table class="table">
        <caption>Lista de Materias</caption>
        <thead style="background-color: #007ca6">
            <tr>
              <th scope="col" style="color: white">id</th>
              <th scope="col" style="color: white">Nombre</th> 
              <th scope="col" colspan="1" style="color: white">Creado</th>
              <th scope="col" colspan="1" style="color: white">Editado</th>
              <th scope="col" colspan="2" style="color: white">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($materias as $materia)
                    <tr>
                    <th scope="row">{{ $materia->id }} </th>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->created_at }}</td>
                    <td>{{ $materia->updated_at }}</td>
                    <td><button type="button" class="btn btn-warning" onclick="location.href= '{{ url('edit/' . $materia->id ) }}'" data-toggle="tooltip" data-html="true" title="Editar el nombre de la materia" >Editar</button></td>
                    
                    <td>
                      <form action="{{action('MateriasController@deleteMaterias', $materia->id)}}" method="POST">
                      
                      </form>


                      <form action="{{route('delete.materias',$materia->id)}}" class="button delete-confirm" method="POST" >
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-html="true" title="Eliminar materia " > Eliminar </button>  
                    </form>



                    </td>  
                    
                    </tr> 
            @endforeach                   
      </tbody>
      
        </table>
        
        {{$materias->links("pagination::bootstrap-4")}}


        </div>

        <div class="text-rigth">
          <a  class="btn btn-primary btn-sm" href="{{url('/home')}}" > Volver</a>
          <a  class="btn btn-primary btn-sm" href="{{route('create.materias')}}" > Agregar otra materia</a>
      </div>
        
  
</div>

<br><br><br>

</div>
</div>
</div>




@endsection


@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script> 

$('.delete-confirm').submit(function(e){
e.preventDefault();
Swal.fire({
  title: '¿Está seguro de eliminar la materia?',
  text: "Los cambios no son reversibles!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, eliminar!',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    // Swal.fire(
    //   'Deleted!',
    //   'Your file has been deleted.',
    //   'success'
    // )

    this.submit();
  }
}) 
});



</script>
@endsection