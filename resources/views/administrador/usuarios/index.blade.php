@extends('layouts.app')

@section('content')
 
    <br>
    <br>
    <p>Usuarios</p>


    <div class="table table-striped">
        <table class="table">
        <caption>Lista de Usuarios</caption>
        <thead style="background-color: #007ca6">
            <tr>
              <th scope="col" style="color: white">id</th>
              <th scope="col" style="color: white">Nombre</th> 
              <th scope="col" colspan="2" style="color: white">Apellidos</th> 
              <th scope="col" style="color: white">Fecha de Nacimiento </th> 
              <th scope="col" style="color: white">Tipo</th> 
              <th scope="col" style="color: white">Correo</th> 
              <th scope="col" colspan="1" style="color: white">Creado</th>

              <th scope="col" colspan="2" style="color: white">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($usuarios as $usuario)
                    <tr>
                    <th scope="row">{{ $usuario->id }} </th>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->apPaterno }}</td>
                    <td>{{ $usuario->apMaterno }}</td>
                    <td>{{ $usuario->fechaNacimiento }}</td>
                    <td>{{ $usuario->tipo }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->created_at }}</td>
                    
                    <td>
                    <form action="{{route('baja',[$usuario->id])}}" method="POST" class="delete-confirm">
                    {{ method_field('PUT') }}
                      {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit" title="Eliminar">Dar de baja</button>
                    </form>
                    </td>
              
                    </tr> 
            @endforeach                   
      </tbody>
      
        </table>
        
       


        </div>

        <div class="text-rigth">
          <a  class="btn btn-primary btn-sm" href="{{url('/home')}}" > Volver</a>
          
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
  title: '¿Está seguro de eliminar al usuario?',
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