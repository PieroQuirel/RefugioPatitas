<x-app-layout>
    <x-slot name="header">
    <!---------------------------------------------------------------------->
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vista Administrador') }}
        </h1>
        <h3></h3>
    <!---------------------------------------------------------------------->
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Panel Usuarios") }}
                    <a href="{{route('panelusuarios.create')}}">
                    <button>AGREGAR USUARIO</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-fixed w-full" style="text-align: center;">
                    <thead>
                        <tr clsss="bg-gray-300 text-white">
                            <th class="border px4 py-2">ID</th>
                            <th class="border px4 py-2">Nombre y Apellido</th>
                            <th class="border px4 py-2">Email</th>
                            <th class="border px4 py-2">Edad</th>
                            <th class="border px4 py-2">Celular</th>
                            <th class="border px4 py-2">Rol en sistema</th>
                            <th class="border px4 py-2">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>
                                    {{$user->name}}
                                    {{$user->apellido}}
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->edad}}</td>
                                <td>{{$user->celular}}</td>
                                <td>{{$user->rol}}</td>
                                <td><a href="{{route('panelusuarios.edit', $user->id)}}"><button style="color:orange;">Editar</button></a>
                                <button style="color:red;">Eliminar</button> 
                                <button>Mascotas</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                       
                </table>
                    <div>
                    </div>
            </div>
        </div>
    </div>


</x-app-layout>