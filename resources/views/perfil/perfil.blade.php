@extends('layouts.padre')

@section('hijos')
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])


</style>
<link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
<link rel="stylesheet" href="{{ asset('css/tienda2.css') }}">


<div id="pmain">

    <!---------------------------- INFORMACION DEL PERFIL ---------------------------->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div id="modal">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Informacion de Perfil') }}
                    </h2>
        
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("Puedes actualizar tu informacion y correo electrónico") }}
                    </p>
                </header>
        
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>
        
                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
        
                    <div>
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="Auth::user()->name" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
        
                    <div>
                        <x-input-label for="email" :value="__('Correo Electrónico')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="Auth::user()->email" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>
        
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Guardar') }}</x-primary-button>
        
                        @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    <!---------------------------- ACTUALIZAR CONTRASEÑA ---------------------------->
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div id="modal">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Actualizar Contraseña') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Crea una contraseña larga e indescifrable para la seguridad de los datos') }}
                    </p>
                </header>
            
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
            
                    <div>
                        <x-input-label for="current_password" :value="__('Actual Contraseña')" />
                        <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>
            
                    <div>
                        <x-input-label for="password" :value="__('Nueva Contraseña')" />
                        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>
            
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Guardar') }}</x-primary-button>
            
                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
    <!---------------------------- CERRAR SESION  ---------------------------->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div id="modal">
                <h2 class="text-lg font-bold">Cerrar sesión</h2>
                <p class="mb-4">¿Estás seguro de que deseas cerrar sesión?</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf                    
                    <x-danger-button>{{ __('Cerrar Sesión') }}</x-danger-button>
                </form>
            </div>
        </div>
    </div>


    <!---------------------------- BORRAR CUENTA ---------------------------->
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div id="modal" >
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Eliminar Cuenta') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Una vez que se elimine su cuenta,los datos se eliminarán de forma permanente.Se solicitará contraseña desea eliminar su cuenta de forma permanente.') }}
                    </p>
                </header>
            
                <x-danger-button
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                >{{ __('¡Eliminar!') }}</x-danger-button>
            
                <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')
            
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Estás seguro de eliminar tu cuenta?') }}
                        </h2>
            
                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Una vez que se elimine su cuenta, datos se eliminarán de forma permanente. Ingrese su contraseña para confirmar que desea eliminar su cuenta de forma permanente.') }}
                        </p>
            
                        <div class="mt-6">
                            <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
            
                            <x-text-input
                                id="password"
                                name="password"
                                type="password"
                                class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}"
                            />
            
                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>
            
                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancelar') }}
                            </x-secondary-button>
            
                            <x-danger-button class="ml-3">
                                {{ __('Si! Eliminar Cuenta') }}
                            </x-danger-button>
                        </div>
                    </form>
                </x-modal>
            </div>
            
        </div>
    </div>

</div>

</body>
</html>

@endsection