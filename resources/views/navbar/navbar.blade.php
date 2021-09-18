<nav id="barra" class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #46464666;" >
  <a class="nav-link" href="{{url('/')}}"><img src="{{url('/img/Mixi-logo.png')}}"class="d-block w-300" alt="img" height="55"></a> 

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
        <a class="nav-link" style="color:#ffffff;" href="{{url('/')}}">Inicio</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" style="color:#ffffff;" href="{{route('contenidos')}}">Contenidos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#ffffff;" href="{{route('nosotros')}}">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#ffffff;" href="{{route('contacto')}}">Contáctanos</a>
      </li>
    </ul>


  @guest
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" style="color:#ffffff;" href="{{ route('login') }}">
                      Iniciar sesión
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" style="color:#ffffff;" href="{{ route('register') }}">
                      Registrarse
                  </a>
              </li>
          </ul>
      </div>
  @else
    <li class="nav {{ Request::is('materias') && ! Request::is('createMaterias')? 'active' : ''}}">
    <li class="nav {{  Request::is('createMaterias') ? 'active' : ''}}">
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" style="color:#ffffff;" href="{{url('/home')}}">                                    
                  Panel Administrador
              </a>
              

              <li class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle" style="color:#ffffff;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ¡Hola   {{ Auth::user()->name }}!
                  </a>                    
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink"> 
                  <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>                      
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                  </div>
              </li>
          </ul>
      </div>
  @endguest
</nav>




<script>
  $(window).scroll(function(){
    if ($("#barra").offset().top > 20) {
      $("#barra").addClass('bg-primary');
    } else {
      $("#barra").removeClass('bg-primary');
    }
    });
</script>