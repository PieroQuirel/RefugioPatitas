@extends('layouts.nuevo')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/mascotas.css') }}">
<link rel="stylesheet" href="{{ asset('css/nuevas vistas/Catalogo.css')}}">

    <div class="p-6 text-gray-900">
        <h1>LAS MASCOTAS</h1>
    </div>

    <div class="container-productos">

    @foreach ($mascotas as $mascota)
        <div class="card">
        <img src="/imagen/{{$mascota->mascota_imagen}}" class="card-img">
        <h5 class="color-letras">{{$mascota->mascota_nombre}}</h5>
        <p class="color-letras">{{$mascota->mascota_descripcion}}</p>
        <div class="">
            <a href="{{route('mascotas.show', $mascota->mascota_id)}}"><button class=" btn-primary" type="button">Ver Detalles</button></a>
        </div>
        </div>
    @endforeach

  </div>

</body>
</html>

@endsection