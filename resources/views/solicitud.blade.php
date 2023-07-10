@extends('layouts.nuevo')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/mascotas.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/nuevas vistas/login.css')}}">

<br>
<div class="p-6 text-gray-900 container2">
    <h1>Solicitud de Adopción</h1>
    <p class="texto">Para continuar con la solicitud, te pedimos rellenar los siguientes datos para comprobar tu compromiso
        con nosotros al querer adoptar esta mascota. La información que se recopile será utilizada exclusivamente
        para asegurar la credibilidad del adoptante y está totalmente protegida.
    </p>
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

<br>
<div class="container">
    <form action="{{route('solicitud.update', $mascota)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <input type="hidden" name="adoptante" value="{{$user}}">
            <input type="hidden" name="mascota" value="{{$mascota->mascota_id}}">
        </div>

        <div>
            <div class="form-group">
            <label for="">DNI</label>
            <input type="number" name="dni" class="form-control">
            </div>

            <input type="hidden" name="fecha_envio" value="{{ date('Y-m-d') }}">

            <div class="form-group">
            <label for="">Dirección</label>
            <input type="text" name="direccion" class="form-control">
            </div>
        </div>
        <div>
            <label for="">Comprobande de Domicilio (Imagen, PDF o WORD)</label>
            <input type="file" name="comprobante_domicilio" class="form-control">
        </div>
        <br>
        <button type="submit"><strong>SIGUIENTE</strong></button>
    </form>
</div>

@endsection