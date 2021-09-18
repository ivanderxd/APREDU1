@extends('layouts.app')
@section('content')
<div class="container">

<br><br><br>
    <div class="card" style="background-color: #ffffff">
        <div class="card-header text-center" style="background-color: #007ca6 ">
                <h5 style="color: #ffffff">Vista de materiales</h5> 
        </div>

    <div class="card-body">
        <br><br>
        <h4>
        Nombre del material:  {{ $arrayMateriales->nombre }}
        </h4>      
        <br>           
        <button type="button" class="btn btn-primary" onclick="location.href= '{{ url('editMateriales/' . $arrayMateriales->id ) }}'"  >¿Editar Nuevamente?</button>
        <button type="button" class="btn btn-light" onclick="location.href= '{{ url('materiales/') }}'">Volver al listado</button>
        <br><br>
    </div>
</div>

<br><br>

</div>
</div>

</div>
@endsection



