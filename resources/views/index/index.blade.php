@extends('layouts.landindex')

@section('conIndex')
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
			<a href="login" class="boton">Iniciar Sesion</a>
		  </div>
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

@endsection