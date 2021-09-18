@extends('layouts.app')

@section('content')

<br>
<br>
<body  div class="card text-white" >
    <div class="container">

    <div class="card" >
        <div class="card-header text-center" style="background-color: #007ca6">
            <font color="white"> Panel administrador</font>
          </div>
      <div class="card-body" >
        <div class="row justify-content-md-center">
            <div class="col-sm-6">

                
                <a href="{{url('/createMaterias')}}" data-toggle="tooltip" data-html="true" title="click para agregar materias" ><img src="{{url('/img/materias1.png')}}"  alt="img" height="175"></a>


            </div>


            <div class="col-sm-6">


                <a  href="{{url('/materias')}}" data-toggle="tooltip" data-html="true" title="click para visualizar las materias registradas"><img src="{{url('/img/materias2.png')}}"  alt="img" height="175"></a>


            </div>



        </div>
    </div>




    <div class="card-body" >
        <div class="row justify-content-md-center">
            <div class="col-sm-6">


                <a href="{{url('/createTipoMateriales')}}" data-toggle="tooltip" data-html="true" title="click para agregar el grado"> <img src="{{url('/img/tipomaterial1.png')}}"  alt="img" height="175"> </a>


            </div>


            <div class="col-sm-6">


                <a href="{{url('/TipoMateriales')}}" data-toggle="tooltip" data-html="true" title="click para visualizar los tipos de materiales registrados"><img src="{{url('/img/tipomaterial2.png')}}"  alt="img" height="175"> </a>


            </div>



        </div>
    </div>






    <div class="card-body" >
        <div class="row justify-content-md-center">
            <div class="col-sm-6">


                <a href="{{url('/createMateriales')}}" data-toggle="tooltip" data-html="true" title="click para agregar materiales"> <img src="{{url('/img/material1.png')}}"  alt="img" height="175"> </a>


            </div>


            <div class="col-sm-6">


                <a  href="{{url('/materiales')}}" data-toggle="tooltip" data-html="true" title="click para visualizar los materiales registrados"> <img src="{{url('/img/material2.png')}}"  alt="img" height="175"> </a>


            </div>



        </div>
    </div>


    <div class="card-body" >
        <div class="row justify-content-md-center">
            <div class="col-sm-6">


                <a href="{{url('/createGrados')}}" data-toggle="tooltip" data-html="true" title="click para agregar el grado"><img src="{{url('/img/grados1.png')}}"  alt="img" height="175"> </a>


            </div>


            <div class="col-sm-6">


                <a href="{{url('/grados')}}" data-toggle="tooltip" data-html="true" title="click para visualizar los grados registrados"> <img src="{{url('/img/grados2.png')}}"  alt="img" height="175"> </a>


            </div>



        </div>
    </div>



    <div class="card-body" >
        <div class="row justify-content-md-center">
            <div class="col-sm-6">


                <!-- <a href="{{url('/')}}" data-toggle="tooltip" data-html="true" title="click para agregar el grado"> <img src="{{url('/img/usuarios1.png')}}"  alt="img" height="175"> </a> -->


            </div>


            <div class="col-sm-6">


                <a href="{{route('usuarios.index')}}" data-toggle="tooltip" data-html="true" title="click para visualizar los grados registrados"> <img src="{{url('/img/usuarios2.png')}}"  alt="img" height="175"> </a>


            </div>



        </div>
    </div>



    <div class="card-footer text-center" style="background-color: #007ca6">
<a> </a>
      </div>


        
      </div>
    </div>
    </body>

    <br>
    <br>


</div></div></div>

@endsection
