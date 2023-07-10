@extends('layouts.nuevo')

@section('contenido')
<link rel="stylesheet" type="text/css" href="{{ asset('css/nuevas vistas/nosotros.css')}}">

<br>
<div class="container">
    <div class="formulario">
      <h2>Contacto</h2>
      <form id="formulario-contacto" action="https://formspree.io/f/mqkvklqz" method="POST">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="Nombre" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="Email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="message">Mensaje:</label>
          <textarea id="message" name="Mensaje" class="form-control" required></textarea>
        </div>
        <br>
        <button type="submit"  value="Enviar" class="btn btn-primary">Enviar</button>
      </form>
    </div>
    <div class="informacion">
      <h2>Sobre Nosotros</h2>
      <p>En nuestra empresa, creemos en la importancia de fomentar la adopción de mascotas y en educar a las personas sobre la responsabilidad de tener una mascota. Estamos comprometidos a promover el bienestar animal y a hacer una diferencia en la vida de los animales necesitados.</p>
      <p>¡Contáctanos hoy mismo y permítenos ayudarte a encontrar a tu nuevo mejor amigo!</p>
      <h3>Información de Contacto</h3>
      <p><strong>Teléfono:</strong> 123456789</p>
      <p><strong>Email:</strong> info@ejemplo.com</p>
      <p><strong>Dirección:</strong> Calle Ejemplo, 123, Ciudad Ejemplo</p>
    </div>
  </div>
  <br>

@endsection