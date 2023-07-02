<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <title>Panel Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <!-------------  BARRA DE NAVEGACION ------------->
    <header>
        <div class="titulo_logo">
            <img src="img/logo.png" alt="Logo" />
            <h1 class="titulo">Refugio patitas</h1>
        </div>
		<nav>
			<a href="#"><i class="fas fa-home"></i> Inicio</a>
			<a href="#"><i class="fas fa-address-book"></i> Contactos</a>
			<a href="#"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a>
		</nav>
	</header>
    <div>
        <h3>Panel de Administrador</h3>
    </div>
    <div class="navbar">
        <a href="panelusuario" >Usuarios</a>
        <a href="panelformularios">Formularios</a>
        <a href="panelmascotas" >Mascotas</a>
    </div>
    <!------------- FIN DE LA BARRA DE NAVEGACION ------------->

    <!------------- AQUI VA TODO EL CONTENIDO DE LA PAGINA QUE LO ESCRIBIREMOS EN ARCHIVOS INDEPENDIENTES ------------->

    @yield('contenido')

    <!------------- FIN ------------->

</body>
</html>