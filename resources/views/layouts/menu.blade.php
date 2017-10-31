<nav role="navigation" style="background: #002957;">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo"><img src="{{ asset('LOGO-S.png') }}" alt="Unsplashed background img 2"></a>
      <ul class="right hide-on-med-and-down center text-white">
        <li class="waves-effect waves-light"><a href="/"><span class="white-text">Inicio</span></a></li>
        <li class="waves-effect waves-light"><a href="{{ url('nosotros') }}"><span class="white-text">Nosotros</span></a></li>
        <li class="waves-effect waves-light"><a href="{{ url('servicios') }}"><span class="white-text">Servicios</span></a></li>
        <li class="waves-effect waves-light"><a href="{{ url('contacto') }}"><span class="white-text">Contacto</span></a></li> 
        <li class="waves-effect waves-light"><span class="white-text">|</span></li>


        <!-- Authentication Links -->
        @if (Auth::guest())
          <li class="waves-effect waves-light"><a class="modal-trigger" href="{{ url('login') }}"><span class="white-text">Ingresar</span></a></li>
         <!-- <li class="waves-effect waves-light"><a class="modal-trigger" href="#modal_registro"><span class="white-text">Registrarse</span></a></li>-->
         <li class="waves-effect waves-light"><a class="modal-trigger" href="{{ url('register') }}"><span class="white-text">Registrarse</span></a></li>
        @else
          <ul id="dropdown2" class="dropdown-content">
            <li><a href="{{ url('usuarios/perfil') }}">Mi Cuenta</a></li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Salir
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>

            <li>
              <a class="dropdown-button white-text" href="#!" data-activates="dropdown2" style="position: relative; padding-left:50px;">
                <img src="/img/{{Auth::user()->avatar}}" class="avatarImage avatar-menu" style="width:32px; height: 32px; position: absolute; top:15px; left:10px; border-radius:50%;">
                <span class="white-text" id="name_avatar">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></span>
              </a>
            </li>
        @endif
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('/') }}">Inicio</a></li>
        <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
        <li><a href="{{ url('servicios') }}">Servicios</a></li>
        <li><a href="{{ url('contacto') }}">Contacto</a></li>
        <div class="divider"></div>

        <!-- Authentication Links -->
        @if (Auth::guest())
          <li><a class="modal-trigger" href="#modal1"><span>Ingresar</span></a></li>
          <li><a class="modal-trigger" href="#modal_registro"><span>Registrarse</span></a></li>
        @else
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="{{ url('usuarios/perfil') }}">Mi Cuenta</a></li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Salir
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>

            <li>
              <a class="dropdown-button" href="#!" data-activates="dropdown1" style="position: relative; padding-left:50px;">
                <img src="/img/{{Auth::user()->avatar}}" style="width:32px; height: 32px; position: absolute; top:7px; left:10px; border-radius:50%;">
                <span>{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></span>
              </a>
            </li>
        @endif
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>