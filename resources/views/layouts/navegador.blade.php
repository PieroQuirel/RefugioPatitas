<!--header-->
<nav id="nav"  class="navbar navbar-expand-lg" >
        <div  class="container-fluid" >
            <a class="navbar-brand" href="/">
            <img id="logo" src="{{ asset('img/logo.png') }}" alt="">
            Refugio de Patitas </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link" href="mascotas">Mascotas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="producto">Tienda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto">Contactanos</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="perfil">{{ Auth::user()->name }} <img class="perfil" src="{{ asset('img/index/Perfil.png')}}" alt=""></a>
              </li>
              @else
              <li>
                <a href="login" class="btn btn-outline-dark">Iniciar Sesión</a>
              </li>
              <li >
                <a href="register" class="btn btn-outline-dark">Registrarse</a>
              </li>
              @endauth
              @endif
            </ul>
          </div>
        </div>
      </nav>
    
<!-- fin header-->