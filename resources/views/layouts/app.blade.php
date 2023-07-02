<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!---------------- ESTE ES EL LAYOUT DE LA VISTA DE ADMINISTRADOR ---------------->
    <!---------------- LOS RELACIONADOS A ESTOS SON NAVIGATION.BLADE PANELES Y DASHBOARD.BLADE ---------------->
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    </head>


    <body  class="font-sans antialiased">
        <div id="bodi" class="min-h-screen bg-gray-100">
            <!-- AQUI LLAMA AL LAYOUT LLAMADO navigation -->
            @include('layouts.navigation')
            

            <!-- Page Heading -->
            <!---------------- SECCION HIJO DE LA SECCION  HEADER ADMINISTRADOR ---------------->
            @if (isset($header))
                <header id="hede" ="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <!---------------- FIN DE SECCION HIJO DE LA SECCION HEADER ADMINISTRADOR ---------------->

            <!-- Page Content -->
            <!---------------- CONTENIDO DE LA PAGINA ADMINISTRADOR ---------------->
            <main>
                {{ $slot }}
            </main>
            <!---------------- FIN DE CONTENIDO DE LA PAGINA ADMINISTRADOR ---------------->
        </div>
    </body>
</html>
