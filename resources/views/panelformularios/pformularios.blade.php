<x-app-layout>
    <x-slot name="header">
    <!---------------------------------------------------------------------->
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vista Administrador') }}
        </h1>

        

        <h3>

        </h3>
    <!---------------------------------------------------------------------->
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Formularios") }}
                </div>
            </div>
        </div>
    </div>


    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-fixed w-full">
                    <thead>
                        <tr clsss="bg-gray-300 text-white">
                            <th class="border px4 py-2">ID Solicitud</th>
                            <th class="border px4 py-2">Adoptante</th>
                            <th class="border px4 py-2">Mascota</th>
                            <th class="border px4 py-2">DNI</th>
                            <th class="border px4 py-2">Dia de solicitud</th>
                            <th class="border px4 py-2">Direccion</th>
                            <th class="border px4 py-2">Comprobante de domicilio</th>
                            <th class="border px4 py-2">Estado de revisión</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($solicitudes as $solicitud)
                            <tr>
                                <td>{{$solicitudes->solicitud_id}}</td>                                                        
                                <td>{{$solicitudes->adoptante}}</td>                                                        
                                <td>{{$solicitudes->mascota}}</td>                                                        
                                <td>{{$solicitudes->DNI}}</td>                                                     
                                <td>{{$solicitudes->fecha_envio}}</td>                                                       
                                <td>{{$solicitudes->direccion}}</td>                                    
                                <td>{{$mascota->comprobante_domicilio}}</td>
                                <td>{{$mascota->estado}}</td>
                                <td><a href="{{route('panelformularios.edit',$solicitudes->solicitud_id}}"><button style="color:orange;">Editar</button></a>
                                <button style="color:red;">Eliminar</button> 
                                <button>Respuestas</button></td>
                            @endforeach
                    </tbody>
                       
                </table>
                    <div>
                    </div>
            </div>
        </div>
    </div>


</x-app-layout>