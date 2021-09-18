@extends('layouts.app')

@section('content')  
        

<br><br><br>
<div class="container">
  <div class="card" style="background-color: #ffffff">
    <div class="card-header text-center" style="background-color: #007ca6">
      <a style="color: white"> Agregar materias </a>
    </div>
    <div class="card-body" >


      <form class="needs-validation" novalidate method="POST" action="{{ route('store.materias')}}">
        {{ @csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label for="">Nombre de la materia</label>
                <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" title="No se permiten carácteres especiales" name="nombre" class="form-control" id="" placeholder="Geografía, Español, etc."  required data-toggle="tooltip" data-html="true" title="Colocar nombre de la materia">
                <ul>
	              @foreach ($errors->all() as $error)
                  <li class="text-danger">{{$error}}</li>
                @endforeach
                </ul>

                
            </div>
        </div>
      
        <br>
        <div class="form-row">
        <button class="btn btn-success" type="submit">Añadir materias</button>

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
