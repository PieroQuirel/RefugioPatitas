@extends('layouts.padre')

@section('hijos')
<link rel="stylesheet" href="{{ asset('css/mascotas.css') }}">

    <div class="p-6 text-gray-900">
        <h1>LAS MASCOTAS</h1>
    </div>

        <div style="text-align:center; background-color:wheat; padding:35px; border-radius: 50px; border: 4px solid;">
            <img src="/imagen/{{$mascota->mascota_imagen}}" style="max-width:200px;" alt="">
            <h1>{{$mascota->mascota_nombre}}</h1>
            <p>{{$mascota->mascota_descripcion}}</p>
            <a href="{{route('solicitud.edit', $mascota->mascota_id)}}"><button type="button">ADOPTAR</button></a>
        </div>

</body>
</html>

@endsection