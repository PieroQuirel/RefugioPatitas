@extends('layouts.sin_nav')
@section('contenido')
<link rel="stylesheet" type="text/css" href="{{ asset('css/nuevas vistas/login.css')}}">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container">
        <img src="{{ asset('img/index/logo.png')}}" alt="Logo" class="logo">

        <!-- INGRESAR CORREO -->
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Ingresa tu correo" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Ingresa tu contraseña" required autocomplete="current-password">
        <x-input-error :messages="$errors->get('password')" class="mt-2" />  
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span> <!--TEXTO RECORDARME -->
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" href="{{ route('password.request') }}">
                    {{ __('Olvido su Contraseña?') }} <!--TEXTO OLVIDO SU CONTRASEÑA -->
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Iniciar Sesion') }} <!--TEXTO INICIAR SESION --> 
            </x-primary-button>
        </div>
    </div>
    </form>
@endsection
