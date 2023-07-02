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
        <a href="/">
            <img src="img/logo.png" alt="Logo" />
        </a>
        <h1 class="titulo">Refugio Patitas</h1>
    </div>
    <nav>
        <a href="#"><i class="fas fa-home"></i> Inicio</a>
        <a href="contacto"><i class="fas fa-address-book"></i> Contactos</a>
        <a href="#"><i class="fas fa-sign-in-alt"></i> Registrarse</a>
    </nav>
</header>
<body>


    @yield('conIndex')



</body>