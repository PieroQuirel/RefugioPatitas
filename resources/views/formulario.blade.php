<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="index2.css">
  <title>Formulario de adopción de mascotas</title>
</head>
<body>

	<header>
		<div class="titulo_logo">
			<a href="/">
				<img src="logo.png" alt="Logo" />
			</a>
			<h1 class="titulo">Refugio Patitas</h1>
		</div>
		<nav>
			<a href="mascotas"><i class="fas fa-home"></i> Inicio</a>
			<a href="contacto"><i class="fas fa-address-book"></i> Contactos</a>
			<a href="perfil"><i class="fas fa-sign-in-alt"></i> Registrarse</a>
		</nav>
	</header>
	<br>

  <div class="container">
    <h1>Formulario de adopción de mascotas</h1>

    <form>
  <form>
    <label for="nombre">1. ¿Cuál es tu nombre completo?</label><br>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="email">2. ¿Cuál es tu dirección de correo electrónico?</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="telefono">3. ¿Cuál es tu número de teléfono?</label><br>
    <input type="tel" id="telefono" name="telefono" required><br>

    <label for="direccion">4. ¿Cuál es tu dirección?</label><br>
    <input type="text" id="direccion" name="direccion" required><br>

    <label for="tipo_mascota">5. ¿Qué tipo de mascota deseas adoptar?</label><br>
    <input type="text" id="tipo_mascota" name="tipo_mascota" required><br>

    <label for="experiencia">6. ¿Tienes experiencia previa en el cuidado de mascotas?</label><br>
    <input type="text" id="experiencia" name="experiencia" required><br>

    <label for="tiempo">7. ¿Cuánto tiempo podrías dedicarle diariamente a tu mascota?</label><br>
    <input type="text" id="tiempo" name="tiempo" required><br>

    <label for="motivo">8. ¿Cuál es tu principal motivo para adoptar una mascota?</label><br>
    <input type="text" id="motivo" name="motivo" required><br>

    <input type="submit" value="Enviar">
  </form>
</div>
</body>
</html>