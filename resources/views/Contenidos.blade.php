@extends('layouts.app')
@section('title', 'Contenidos')
@section('content')
<br>
<br>



    <div align="center"><h1 class="display-6">Guia de Estudios </h1></div>


<br>
<br>





<div class="container" >
<div class="accordion" id="accordionExample" >

  <div class="card" >

    <div class="card-header" id="headingOne" style="background-color: #007ca6 " >
      <h2 class="mb-0" >
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #ffffff">
          1° - Primer Grado
        </button>
      </h2>
    </div>
    
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
    <br>

    <div class="card mb-3" >
  <div class="row g-0">
    
    <div class="col-md-2">
      <img src="{{url('/img/matematicas.png')}}" class="d-block w-100 img-fluid">
    </div>

    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title">Primer Grado</h5>
        <p class="card-text">Aquí puedes descargar las guías de los marcadores de primer grado, descarga y listo!</p>
        <p class="card-text">
          <small class="text-muted">Solo debes hacer click en alguno de los siguientes links </small>
        </p>
        <p class="card-text">
          <a class="text-muted" href="https://drive.google.com/file/d/1oCB0XCaGcI-Z_woo6vNHGVHPV54o0Tj8/view?usp=sharing"> Descarga aquí </a>
        </p>
      </div>
    </div>

  </div>
  <br>
</div>


  </div>

  
  <div class="card">
    <div class="card-header" id="headingTwo" style="background-color: #007ca6 ">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #ffffff">
          2° - Segundo Grado
        </button>
      </h2>
    </div>
    
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
    <br>
      
    <div class="card mb-3" >
      <div class="row g-0">
        
        <div class="col-md-2">
          <img src="{{url('/img/español.png')}}" class="d-block w-100 img-fluid">
        </div>
    
        <div class="col-md-9">
          <div class="card-body">
            <h5 class="card-title">Segundo grado</h5>
            <p class="card-text">Aquí puedes descargar las guías de los marcadores de segundo grado,  descarga y listo!</p>
            <p class="card-text"><small class="text-muted">Solo debes hacer click en alguno de los siguientes links </small></p>
            <p class="card-text"><small class="text-muted" href="https://drive.google.com/file/d/1mYIRiWFNr5AYbiqoSDRDNW_aEll1ccHM/view?usp=sharing"> Descarga aquí </small></p>
          </div>
        </div>
    
      </div>
      <br>
    </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree" style="background-color: #007ca6 ">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #ffffff">
          3° - Tercer Grado
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <br>
      <div class="card mb-3" >
        <div class="row g-0">
          
          <div class="col-md-2">
            <img src="{{url('/img/cienciasna.png')}}" class="d-block w-100 img-fluid">
          </div>
      
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">Tercer grado</h5>
              <p class="card-text">Aquí puedes descargar las guías de los marcadores de tercer grado,  descarga y listo!</p>
              <p class="card-text"><small class="text-muted">Solo debes hacer click en alguno de los siguientes links </small></p>
              <p class="card-text"><small class="text-muted" href="https://drive.google.com/file/d/1cxLIExS2XPBDK81LKV456cT_xfh952dP/view?usp=sharing"> Descarga aquí </small></p>
            </div>
          </div>
      
        </div>
        <br>
      </div>
    </div>
  </div>




  <div class="card">
    <div class="card-header" id="headingFour" style="background-color: #007ca6 ">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo" style="color: #ffffff">
          4° - Cuarto Grado
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <br>
      <div class="card mb-3" >
        <div class="row g-0">
          
          <div class="col-md-2">
            <img src="{{url('/img/historia.png')}}" class="d-block w-100 img-fluid">
          </div>
      
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">Cuarto grado</h5>
              <p class="card-text">Aquí puedes descargar las guías de los marcadores de cuarto grado, descarga y listo!</p>
              <p class="card-text"><small class="text-muted">Solo debes hacer click en alguno de los siguientes links </small></p>
              <p class="card-text"><small class="text-muted" href="https://drive.google.com/file/d/1U1p6IC1GkQoo4cw3gadJjxYeRCIt5JV1/view?usp=sharing"> Descarga aquí </small></p>
            </div>
          </div>
      
        </div>
        <br>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFive" style="background-color: #007ca6 ">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo" style="color: #ffffff">
          5° - Quinto Grado
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <br>
      <div class="card mb-3" >
    <div class="row g-0">
      
      <div class="col-md-2">
        <img src="{{url('/img/icon geografia.png')}}" class="d-block w-100 img-fluid">
      </div>
  
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Quinto grado</h5>
          <p class="card-text">Aquí puedes descargar las guías de los marcadores de quinto grado, descarga y listo!</p>
          <p class="card-text"><small class="text-muted">Solo debes hacer click en alguno de los siguientes links </small></p>
          <p class="card-text"><small class="text-muted" href="https://drive.google.com/file/d/1nzIuOMiRqNRxJfz_UhNaJ1mwoO9qbQEx/view?usp=sharing"> Descarga aquí </small></p>
        </div>
      </div>
  
    </div>
    <br>
  </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingSix" style="background-color: #007ca6 ">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo" style="color: #ffffff">
          6° - Sexto Grado
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <br>
      <div class="card mb-3" >
    <div class="row g-0">
      
      <div class="col-md-2">
        <img src="{{url('/img/formacion.png')}}" class="d-block w-100 img-fluid">
      </div>
  
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Sexto grado</h5>
          <p class="card-text">Aquí puedes descargar las guías de los marcadores de sexto grado, descarga y listo!</p>
          <p class="card-text"><small class="text-muted">Solo debes hacer click en alguno de los siguientes links </small></p>
          <p class="card-text"><small class="text-muted" href="https://drive.google.com/file/d/163SjbPRCActhht4G2YBMR5X5aaZ0KIZD/view?usp=sharing"> Descarga aquí </small></p>
        </div>
      </div>
  
    </div>
    <br>
  </div>
    </div>
  </div>



</div>
</div>

<br>
<br>

</div>
</div>
</div>

@endsection