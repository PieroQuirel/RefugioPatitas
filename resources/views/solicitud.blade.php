@extends('layouts.padre')

@section('hijos')
<link rel="stylesheet" href="{{ asset('css/mascotas.css') }}">

<div class="p-6 text-gray-900">
    <h1>Solicitud</h1>
</div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="{{route('solicitud.update', $mascota)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
    <div>
        <label for="">id de usuario</label>
        <input type="hidden" name="adoptante" value="{{$user}}">
        <label for="">id de mascota</label>
        <input type="hidden" name="mascota" value="{{$mascota->mascota_id}}">
    </div>
    <div>
        <label for="">DNI</label>
        <input type="number" name="dni">
        <label for="">fecha emision</label>
        <input type="hidden" name="fecha_envio" value="{{ date('Y-m-d') }}">
        <label for="">direccion</label>
        <input type="text" name="direccion">
    </div>
    <div>
        <label for="">comprobande de domicilio (PDF o WORD)</label>
        <input type="file" name="comprobante_domicilio">
    </div>
    <button type="submit"><strong>SIGUIENTE</strong></button>
</form>
</body>
</html>

@endsection