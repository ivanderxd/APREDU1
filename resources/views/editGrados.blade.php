@extends('layouts.app')
@section('content')
<br><br><br>
<div class="container">
  <div class="card" style="background-color: #ffffff">
    <div class="card-header text-center" style="background-color: #007ca6">
      <a style="color: white"> Editar grado </a>
    </div>
    <div class="card-body" >


      <form class="needs-validation update" novalidate method="POST" action="{{action('GradosController@putEdit', $arrayGrados->id)}}">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label for="validationCustom01">Grado</label>
                <input type="text" name="grado" class="form-control" id="validationCustom01" placeholder="1°,2°,3°,etc" value="{{$arrayGrados->grado}}" required>
                <div class="valid-feedback">
                </div>
                <div class="invalid-feedback">
                    Ingresa el Grado.
                </div>
            </div>
        </div>
      
        <br>
        <div class="form-row">
        <button class="btn btn-success"  type="submit">Actualizar grado</button>

        </div>  
        
    </form>

<br><br>

    <div class="button">
      <a  class="btn btn-primary btn-sm" href="{{url('/home')}}" > Volver al panel</a>
  </div>

    </div>
  </div>
</div>


<br><br><br>

</div>
</div>
</div>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

@endsection


@section('scripts')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

            $('.update').submit(function(e){
                e.preventDefault();
                Swal.fire({
                title: '¿Estás seguro?',
                text: "Aún podrás editar nuevamente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#1E40AF',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, estoy seguro',
                cancelButtonText: 'No, cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire(
                    // 'Deleted!',
                    // 'Your file has been deleted.',
                    // 'success'
                    // )
                    this.submit();
                }
                })
            });
        </script>
@endsection