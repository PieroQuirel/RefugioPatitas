<x-app-layout>
    <x-slot name="header">
    <!---------------------------------------------------------------------->
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vista Administrador') }}
        </h1>
        <h3></h3>
    <!---------------------------------------------------------------------->
    </x-slot>

    <div style="background-color:coral">
    <div>
        <h1>Crear Usuario</h1>
    </div>
    <div>
        <a href="{{route('panelusuarios.index')}}">Volver</a>

    </div>
    <form method="POST" action="{{ route('panelusuarios.store') }}">
        @csrf

        <!-- NOMBRE -->
        <div>
            <label for="name">Nombre</label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- APELLIDO -->
        <div class="mt-4">
            <label for="apellido">Apellido</label>
            <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
            <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
        </div>

        <!-- CORREO ELECTRONICO -->
        <div class="mt-4">
            <label for="email">Correo electrónico</label>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- EDAD -->
        <div class="mt-4">
            <label for="edad">Edad</label>
            <x-text-input id="edad" class="block mt-1 w-full" type="number" name="edad" :value="old('edad')" autofocus autocomplete="edad" />
            <x-input-error :messages="$errors->get('edad')" class="mt-2" />
        </div>

        <!-- CELULAR -->
        <div class="mt-4">
            <label for="celular">Celular</label>
            <x-text-input id="celular" class="block mt-1 w-full" type="number" name="celular" :value="old('celular')" autofocus autocomplete="celular" />
            <x-input-error :messages="$errors->get('celular')" class="mt-2" />
        </div>

        <!-- CONTRASEÑA -->
        <div class="mt-4">
            <label for="password">Contraseña</label>
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password" name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- CONFIRMAR CONTRASEÑA -->
        <div class="mt-4">
            <label for="password">Confirmar Contraseña</label>
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- ROL -->
        <div class="mt-4">
            <label for="rol">Tipo de Usuario</label>
            <select name="rol" id="rol">
                <option value="Adoptante">Adoptante</option>
                <option value="Administrador">Administrador</option>
                <option value="Veterinario">Veterinario</option>
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button type="submit" class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
    </div>
</x-app-layout>