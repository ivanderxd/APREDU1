@extends('layouts.app')

@section('content')

<br><br>



    <div class="card" style="background-color: #ffffff">
        <div class="card-header text-center" style="background-color: #007ca6">
            <h5 style="color: #ffffff">Registro</h5> 
        </div>
    </div>

        <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5">
    <br>
    <br>
    <br>
      <img src="{{url('/img/register1.jpg')}}"class="d-block w-300 img-fluid" alt="img" height="">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Ingresa tus datos</h5>

        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <br>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre(s)</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-user form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Inserte su nombre o nombres" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>Verifique que el nombre este bien escrito.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('apPaterno') ? ' has-error' : '' }}">
                            <label for="apPaterno" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-font form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="apPaterno" type="text" class="form-control" placeholder="Inserte su apellido paterno" name="apPaterno" value="{{ old('apPaterno') }}" required autofocus>

                                @if ($errors->has('apPaterno'))
                                    <span class="help-block">
                                        <strong>Verifique que el apellido este bien escrito.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('apMaterno') ? ' has-error' : '' }}">
                            <label for="apMaterno" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-font form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="apMaterno" type="text" class="form-control" placeholder="Inserte su apellido materno" name="apMaterno" value="{{ old('apMaterno') }}" required autofocus>

                                @if ($errors->has('apMaterno'))
                                    <span class="help-block">
                                        <strong>Verifique que el apellido este bien escrito.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('fechaNacimiento') ? ' has-error' : '' }}">
                            <label for="fechaNacimiento" class="col-md-4 control-label">Fecha de Nacimiento</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-calendar form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="fechaNacimiento" type="text" class="form-control" placeholder="Año-Mes-Día (separados por guiones)" name="fechaNacimiento" value="{{ old('fechaNacimiento') }}" required autofocus>

                                @if ($errors->has('fechaNacimiento'))
                                    <span class="help-block">
                                        <strong>Verifique que la fecha de nacimiento este bien.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('nombreTutor') ? ' has-error' : '' }}">
                            <label for="nombreTutor" class="col-md-4 control-label">Nombre del tutor</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-font form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="nombreTutor" type="text" class="form-control" placeholder="Inserte el nombre del tutor" name="nombreTutor" value="{{ old('nombreTutor') }}" required autofocus>

                                @if ($errors->has('nombreTutor'))
                                    <span class="help-block">
                                        <strong>Verifique que el nombre del tutor este bien escrito.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('correoTutor') ? ' has-error' : '' }}">
                            <label for="correoTutor" class="col-md-4 control-label">Correo del tutor</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-envelope form-control-feedback"   style="color: #bdbdbd"></i>
                                <input id="correoTutor" type="text" class="form-control" placeholder="Inserte el correo del tutor" name="correoTutor" value="{{ old('correoTutor') }}" required autofocus>

                                @if ($errors->has('correoTutor'))
                                    <span class="help-block">
                                        <strong>Verifique que el correo del tutor este bien escrito.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-phone form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="telefono" type="text" class="form-control" placeholder="Inserte su número de teléfono" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>Verifique que el telefono este bien escrito.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="tipo" class="col-md-4 control-label">Tipo de usuario</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-user form-control-feedback"  style="color: #bdbdbd"></i>
                                <select name="tipo" id="tipo" class="form-control">
                                <option value="administrador">Administrador</option>
                                <option value="estudiante" selected>Estudiante</option>
                                <option value="docente">Docente</option>
                                </select>
                                
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                            <label for="genero" class="col-md-4 control-label">Género</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-user form-control-feedback"  style="color: #bdbdbd"></i>
                                <select name="genero" id="genero" class="form-control">
                                <option value="hombre">Hombre</option>
                                <option value="mujer" selected>Mujer</option>
                                </select>
                                
                            </div>
                        </div>


                        
                        <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                            <label for="pais" class="col-md-4 control-label">País</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-user form-control-feedback"  style="color: #bdbdbd"></i>
                                <select name="pais" id="pais" class="form-control">
                                <option value="Mexico" selected>México</option>
                                <option value="Estados Unidos">Estados Unidos</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Canada" >Canadá</option>
                                <option value="Cuba" >Cuba</option>
                                <option value="Peru" >Perú</option>
                                <option value="Venezuela" >Venezuela</option>
                                </select>
                                
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-envelope form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="email" type="email" class="form-control" placeholder="ejemplo@ejemplo.com" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>Esta cuenta ya esta registrada o verifique que este bien escrita.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-lock form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="password-confirm" type="password" class="form-control" placeholder="Inserte la misma contraseña del apartado anterior" name="password_confirmation" required>
                            </div>
    
                        </div>

                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Confirmar Contraseña</label>

                             <div class="col-md-10 form-group has-feedback" >
                            <i class="fa fa-shield form-control-feedback"  style="color: #bdbdbd"></i>
                                <input id="password" type="password" class="form-control" placeholder="Inserte una contraseña a 6 dígitos o más" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>La contraseña no coincide.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<br>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-html="true" title="Click para registrate">
                                    Regístrate
                                </button>
                            </div>
                        </div>
                    </form>



        </div>
    </div>
  </div>
</div>





<br><br><br>
@endsection
