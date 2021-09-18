@extends('layouts.app')

@section('content')  
        

<br><br><br>
<div class="container">
  <div class="card" style="background-color: #ffffff">
    <div class="card-header text-center" style="background-color: #007ca6">
      <a style="color: white"> Agregar materiales </a>
    </div>
    <div class="card-body" >


      <form class="needs-validation" novalidate method="POST" action="{{ route('store.materiales')}}">
        {{ @csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label for="">Nombre del material</label>
                <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" title="No se permiten carácteres especiales" name="nombre" class="form-control" id="" placeholder="Video, animación, Modelo 3D, etc."  required data-toggle="tooltip" data-html="true" title="Colocar nombre del material">
                <ul>
	              @foreach ($errors->all() as $error)
                  <li class="text-danger">{{$error}}</li>
                @endforeach
                </ul>

                
            </div>

            <div class="col-md-8">
                <label for="">Descripción del material</label>
                <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" title="No se permiten carácteres especiales" name="descripcion" class="form-control" id="" placeholder="Video sobre la batalla de Puebla."  required data-toggle="tooltip" data-html="true" title="Colocar la descripción del material">
                <ul>
	              @foreach ($errors->all() as $error)
                  <li class="text-danger">{{$error}}</li>
                @endforeach
                </ul>

                
            </div>

            <div class="col-md-8">
                <label for=""> Archivo </label>
                <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" title="No se permiten carácteres especiales" name="archivo" class="form-control" id="" placeholder="Agregar un archivo"  required data-toggle="tooltip" data-html="true" title="">
                <ul>
	              @foreach ($errors->all() as $error)
                  <li class="text-danger">{{$error}}</li>
                @endforeach
                </ul>

                
            </div>


            <div class="col-md-8">
                <label for="tipo"> Tipo Material </label>
                <select name="tipo" id="tipo" class="form-control"> 

                @foreach ($tipos as $tipo) 
                  <option value="{{$tipo->id}}">

                  {{$tipo->tipomaterial}}

                  </option> 
                  
                @endforeach
                
                </select>
                

                
            </div>


        </div>
      
        <br>
        <div class="form-row">
        <button class="btn btn-success" type="submit">Añadir material</button>

        </div>  
        
    </form>

<br><br>

    <div class="button">
      <a  class="btn btn-primary btn-sm" href="{{url('/home')}}" > Volver al Panel</a>
  </div>

    </div>
  </div>
</div>


<br><br><br>

</div>
</div>
</div>


@endsection
