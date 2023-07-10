@extends('layouts.sin_nav')
@section('contenido')
<link rel="stylesheet" type="text/css" href="{{ asset('css/nuevas vistas/register.css')}}">
<br>
<div class="container">
    <img src="{{ asset('img/index/logo.png')}}" alt="Logo" class="logo">
    <h1>Registro</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- NOMBRE -->
        <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa tu nombre" required autofocus autocomplete="name">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- APELLIDO -->
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ingresa tu apellido" required autofocus autocomplete="apellido">
            <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
        </div>

        <!-- CORREO ELECTRONICO -->
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Ingresa tu email" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- EDAD -->
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" class="form-control" placeholder="Ingresa tu edad" required autofocus autocomplete="edad">
            <x-input-error :messages="$errors->get('edad')" class="mt-2" />
        </div>

        <!-- CELULAR -->
        <div class="form-group">
            <label for="celular">Celular:</label>
            <input type="number" id="celular" name="celular" class="form-control" placeholder="Ingresa tu celular (Opcional)" required autofocus autocomplete="celular">
            <x-input-error :messages="$errors->get('celular')" class="mt-2" />
        </div>

        <!-- CONTRASEÑA -->
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Ingresa tu contraseña" required autofocus autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- CONFIRMAR CONTRASEÑA -->
        <div class="form-group">
            <label for="password_confirmation">Confirmar contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" 
                    placeholder="Ingresa tu contraseña nuevamente" required autofocus autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('¿Ya está registrado?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</div>
@endsection
