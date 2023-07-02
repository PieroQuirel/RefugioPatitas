<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Refugio Patitas</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300&display=swap" rel="stylesheet">
    <img src="{{ asset('img/') }}" alt="">
</head>
<body>
	<header>
		<div class="titulo_logo">
			<a href="/">
				<img src="img/logo.png" alt="Logo" />
			</a>
			<h1 class="titulo">Refugio Patitas</h1>
		</div>
		<nav>
			<a href="mascotas"><i class="fas fa-home"></i>Inicio</a>
			@if (Route::has('login'))
				@auth
					<a href="productos"><i class="fas fa-shopping-cart"></i>Carrito</a>
					<a href="contacto"><i class="fas fa-address-book"></i>Contactos</a>
					<a href="perfil"><i class="fas fa-user"></i>{{ Auth::user()->name }}</a>
				@else
					<a href="login"><i class="fas fa-sign-in-alt"></i>Iniciar Sesion</a>
					<a href="login"><i class="fas fa-sign-in-alt"></i>Registrarse</a>
				@endauth
            @endif

		</nav>
	</header>
    <br>


@yield('hijos')

