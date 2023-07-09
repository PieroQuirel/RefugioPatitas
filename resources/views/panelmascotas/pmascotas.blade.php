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
                    {{ __("Panel de Mascotas") }}
                    <a href="{{route('panelmascotas.create')}}">
                    <button>AGREGAR MASCOTA</button>
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
                            <th class="border px4 py-2">Nombre</th>
                            <th class="border px4 py-2">Estado de adopción</th>
                            <th class="border px4 py-2">Tipo y Raza</th>
                            <th class="border px4 py-2">Edad</th>
                            <th class="border px4 py-2">Fecha de recojo</th>
                            <th class="border px4 py-2">Imagen</th>
                            <th class="border px4 py-2">Descripción</th>
                            <th class="border px4 py-2">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mascotas as $mascota)
                            <tr>
                                <td>{{$mascota->mascota_id}}</td>                                                        
                                <td>{{$mascota->mascota_nombre}}</td>                                                        
                                <td>{{$mascota->estado}}</td>                                                        
                                <td>{{$mascota->tipo}} {{$mascota->raza}}</td>                                                     
                                <td>{{$mascota->mascota_edad}}</td>                                                       
                                <td>{{$mascota->fecha_recojo}}</td>                                    
                                <td><img style="max-width:100px;" src="/imagen/{{$mascota->mascota_imagen}}"></td>
                                <td>{{$mascota->mascota_descripcion}}</td>
                                <td><a href="{{route('panelmascotas.edit', $mascota->mascota_id)}}"><button style="color:orange;">Editar</button></a>
                                <button style="color:red;">Eliminar</button> 
                                <button>Registro Médico</button></td>
                        @endforeach
                    </tbody>
                </table>
                    <div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
