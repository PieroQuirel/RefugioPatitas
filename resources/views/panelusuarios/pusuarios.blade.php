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
                    {{ __("Panel Usuarios") }}
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
                            <th class="border px4 py-2">ID</th>
                            <th class="border px4 py-2">Usuario</th>
                            <th class="border px4 py-2">Adoptante</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                </table>
                    <div>
                    </div>
            </div>
        </div>
    </div>


</x-app-layout>