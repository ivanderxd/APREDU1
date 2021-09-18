@extends('layouts.app')

@section('content')



<br><br>




    <div class="card" style="background-color: #ffffff">
        <div class="card-header text-center" style="background-color: #007ca6 ">
                <h5 style="color: #ffffff">Iniciar Sesión</h5> 
        </div>
    </div>

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-6">
      <img src="{{url('/img/welcome.jpg')}}"class="d-block w-300 img-fluid" alt="img" height="350">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">¡Hola de nuevo!</h5>

        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-envelope form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="email" type="email" class="form-control" name="email" placeholder="ejemplo@ejemplo.com"   value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>Verifique que el correo o contraseña sean correctos</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-lock form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar
                                </button>
                            </div>
                        </div>
                    </form>
      </div>
    </div>
  </div>
</div>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>




<br><br><br>
<script src="https://kit.fontawesome.com/cbec465611.js" crossorigin="anonymous"></script>
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
