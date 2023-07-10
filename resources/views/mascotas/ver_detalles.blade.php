@extends('layouts.nuevo')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/mascotas.css') }}">
<link rel="stylesheet" href="{{ asset('css/nuevas vistas/Ver Detalles.css')}}">

    <div class="p-6 text-gray-900">
        <h1>Detalles de {{$mascota->mascota_nombre}}</h1>
    </div>

  <div class="container-VerDetalles">
    <div class="pet-details">
      <img src="/imagen/{{$mascota->mascota_imagen}}" alt="">
      <div class="Info">
        <div class="info-1">
            <h2>{{$mascota->mascota_nombre}}</h2>
            <br>
          <p>Descripción: {{$mascota->mascota_descripcion}}</p> 
          <br>
        </div>
      <ul class="DNI" >
        <li>Raza: {{$mascota->raza}}</li>
        <li>Tipo: {{$mascota->tipo}}</li>
        <li>Edad: {{$mascota->mascota_edad}}</li>
      </ul>

      <div class="linea-negra"></div>

      <div class="img-de-mascota">
        <img class="img-mascotas-2" src="/imagen/{{$mascota->mascota_imagen}}" alt="">
        <img class="img-mascotas-2" src="/imagen/{{$mascota->mascota_imagen}}" alt="">
        <img class="img-mascotas-2" src="/imagen/{{$mascota->mascota_imagen}}" alt="">
      </div>

      <a href="{{route('solicitud.edit', $mascota->mascota_id)}}">
        <button type="button" class="btn btn-primary btn-lg btn-block">ADOPTAR</button></a>

      </div>
    </div>
    <a class="Volver-Catalogo" href="mascotas">&lt; Regresar al Catálogo</a>
  </div>


@endsection