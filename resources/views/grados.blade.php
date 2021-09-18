@extends('layouts.app')

@section('content')
<div class="container"> 
    <br>
    <br>
    <p>Grados</p>


    <div class="table table-striped">
        <table class="table">
        <caption>Lista de Grados</caption>
        <thead style="background-color: #007ca6">
            <tr>
              <th scope="col" style="color: white">id</th>
              <th scope="col" style="color: white">Grado</th> 
              <th scope="col" colspan="1" style="color: white">Creado</th>
              <th scope="col" colspan="1" style="color: white">Editado</th>
              <th scope="col" colspan="2" style="color: white">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($grados as $grado)
                    <tr>
                    <th scope="row">{{ $grado->id }} </th>
                    <td>{{ $grado->grado }}</td>
                    <td>{{ $grado->created_at }}</td>
                    <td>{{ $grado->updated_at }}</td>
                    <td><button type="button" class="btn btn-warning" onclick="location.href= '{{ url('editGrados/' . $grado->id ) }}'" data-toggle="tooltip" data-html="true" title="Editar el grado" >Editar</button></td>
                    
                    <td>
                      <form action="{{action('GradosController@deleteGrados', $grado->id)}}" method="POST">
                      
                      </form>


                      <form action="{{route('delete.grados',$grado->id)}}" class="button delete-confirm" method="POST" >
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-html="true" title="Eliminar grado " > Eliminar </button>  
                    </form>



                    </td>  
                    
                    </tr> 
            @endforeach                   
      </tbody>
      
        </table>
        
        {{$grados->links("pagination::bootstrap-4")}}


        </div>

        <div class="text-rigth">
          <a  class="btn btn-primary btn-sm" href="{{url('/home')}}" > Volver</a>
          <a  class="btn btn-primary btn-sm" href="{{route('create.grados')}}" > Agregar otro grado</a>
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
  title: '¿Está seguro de eliminar el grado?',
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