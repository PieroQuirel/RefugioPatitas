@extends('layouts.nuevo')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">

<div class="container">
    <h1>Formulario de adopción de mascotas</h1>

    <form method="post" action="https://formspree.io/f/xaygyogb">
      
      <div class="form-group">
        <label for="nombre">1. ¿Por qué desea adoptar?</label><br>
        <textarea id="1. ¿Por qué desea adoptar?" name="1. ¿Por qué desea adoptar?" rows="4" required></textarea>
      </div>
      <br>
      <div class="form-group">
        <label for="email">2. ¿Tiene usted otros animales?</label><br>
        <textarea id="2. ¿Tiene usted otros animales?" name="2. ¿Tiene usted otros animales?" rows="4" required></textarea>
      </div>
      <br>
      <div class="form-group">
        <label for="telefono">3. ¿Qué es lo que más te gusta de los animales?</label><br>
        <textarea id="3. ¿Qué es lo que más te gusta de los animales?" name="3. ¿Qué es lo que más te gusta de los animales?" rows="4" required></textarea>
      </div>
      <br>
      <div class="form-group">
        <label for="direccion">4. ¿Cuántas personas viven en su casa?</label><br>
        <textarea id="4. ¿Cuántas personas viven en su casa?" name="4. ¿Cuántas personas viven en su casa?" rows="4" required></textarea>
      </div>
      <br>
      <div class="form-group">
        <label for="tipo_mascota">5. ¿Cuánto tiempo al día podrías dedicarle al animal?</label><br>
        <textarea id="5. ¿Cuánto tiempo al día podrías dedicarle al animal?" name="5. ¿Cuánto tiempo al día podrías dedicarle al animal?" rows="4" required></textarea>
      </div>
      <br>
      <div class="form-group">
        <label for="experiencia">6. ¿Hay niños en tu hogar?</label><br>
        <textarea id="6. ¿Hay niños en tu hogar?" name="6. ¿Hay niños en tu hogar?" rows="4" required></textarea>
      </div>
      <br>
      <div class="form-group">
        <label for="tiempo">7. En caso de rentar domicilio, ¿les permiten animales en la casa?</label><br>
        <textarea id="7. En caso de rentar domicilio, ¿les permiten animales en la casa?" name="7. En caso de rentar domicilio, ¿les permiten animales en la casa?" rows="4" required></textarea>
      </div>
      <br>
      <div class="form-group">
        <label for="motivo">8. En caso de no poder hacerse cargo, ¿Qué haría con el animal?</label><br>
        <textarea id="8. En caso de no poder hacerse cargo, ¿Qué haría con el animal?" name="8. En caso de no poder hacerse cargo, ¿Qué haría con el animal?" rows="4" required></textarea>
      </div>

      <input type="submit" value="Enviar">
    </form>
  </div>

  @endsection