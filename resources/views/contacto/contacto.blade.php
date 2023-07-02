@extends('layouts.padre')

@section('hijos')

<link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
<div class="container">
    <div class="formulario">
      <h2>Contacto</h2>
      <form id="formulario-contacto">
        <div class="campo">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="campo">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="campo">
          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" required></textarea>
        </div>
        <input type="submit" value="Enviar">
      </form>
    </div>
    <div class="informacion">
      <h2>Sobre Nosotros</h2>
      <p>En nuestra empresa, creemos en la importancia de fomentar la adopción de mascotas y en educar a las personas sobre la responsabilidad de tener una mascota. Estamos comprometidos a promover el bienestar animal y a hacer una diferencia en la vida de los animales necesitados. </p>
      <p>¡Contáctanos hoy mismo y permítenos ayudarte a encontrar a tu nuevo mejor amigo!</p>
     <h3>Información de Contacto</h3>
      <p><strong>Teléfono:</strong> 123456789</p>
      <p><strong>Email:</strong> info@ejemplo.com</p>
      <p><strong>Dirección:</strong> Calle Ejemplo, 123, Ciudad Ejemplo</p>
    </div>
  </div>
</body>
</html>

@endsection