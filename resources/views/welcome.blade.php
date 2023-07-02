<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Refugio Patitas</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <img src="{{ asset('img/') }}" alt="">
    
</head>
<header>
    <div class="titulo_logo">
        <img src="img/logo.png" alt="Logo" />
        <h1 class="titulo">Refugio Patitas</h1>
    </div>
    <nav>
        <!--En resumen, este código verifica si existen ciertas rutas en el sistema de enrutamiento y muestra enlaces 
		condicionales en función del estado de autenticación del usuario. Si el usuario está autenticado, 
		se muestra un enlace de "Inicio", de lo contrario, se muestran enlaces de "Iniciar sesion" (si la ruta de registro está disponible). -->
        
		@if (Route::has('login'))
			<a href="/mascotas"><i class="fas fa-home"></i>Inicio</a>
            @auth
				<a href="productos"><i class="fas fa-shopping-cart"></i>Carrito</a>
				<a href="contacto"><i class="fas fa-address-book"></i>Contactos</a>
				<a href="perfil"><i class="fas fa-user"></i>{{ Auth::user()->name }}</a> <!-- Auth SIRVE PARA LLAMAR AL USUARIO -->
            @else
                <a href="login"><i class="fas fa-sign-in-alt"></i>Iniciar Sesion</a>
				<a href="register"><i class="fas fa-sign-in-alt"></i>Registrarse</a>
            @endauth
        @endif



    </nav>
</header>
<body>
    <br>
	<div class="container">
		<img class="img2" src="img/logo.png" alt="">
		<div class="titulo2">
		  <h1>Bienvenido a Refugio Patitas</h1>
		</div>
	</div>
	<br>
	<div class="image-container">
		<img id="imagen" src="img/fondo3.png" alt="Imagen">
		<div class="text-overlay">
			<h2>Si buscas compañía,<br>hay un amigo esperando por ti.<br>Adoptando con responsabilidad</h2>
		</div>
	</div>
	<div class="contenido">
		<div class="info">
		  <div class="botones-contenido">
			<a href="mascotas" class="boton">Mascotas</a>
			<a href="productos" class="boton">Productos</a>
			@if (Route::has('login'))
				@auth
					<a href="perfil" class="boton">Perfil</a>
				@else
					<a href="login" class="boton">Iniciar Sesion</a>
					<a href="register" class="boton">Registrarse</a>
				@endauth
        	@endif
		  </div>
          
    <!----------------------------------------------------------------FIN LOGIN Y REGISTER-------------------------------------------------------------->
		  <div class="list-and-image">
		
			<div class="list">
			  <h2>Pasos para adoptar</h2>
			  <ul>
				<li>Registrarse aquí en la página</li>
				<li>Revisar el catálogo de mascotas en adopción</li>
				<li>Mirar la información de la que más te interese</li>
				<li>Rellenar el formulario de adopción</li>
				<li>¡Esperar nuestra respuesta y acordar un día para entregártela!</li>
			  </ul>
			</div>
			<div class="img">
				<img alt="Image" src="img/fondo2.png">
			  </div>
		  </div>
		</div>
	  </div>
</body>
</html>

            
