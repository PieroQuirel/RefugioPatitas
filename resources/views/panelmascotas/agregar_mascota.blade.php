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
        <h1>Crear Mascota</h1>
    </div>
    <div>
        <a href="{{route('panelmascotas.index')}}">Volver</a>
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

    <form action="{{ route('panelmascotas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Nombre de la mascota</label>
            <input type="text" name="mascota_nombre" class="form-control">
        </div>
        <div>
            <label for="">Estado</label>
            <select name="estado" id="">
                <option value="En adopcion">En adopción</option>
                <option value="Adoptado">Adoptado</option>
                <option value="En tratamiento">En tratamiento</option>
            </select>
        </div>
        <div>
            <label for="">Tipo</label>
            <input type="text" name="tipo" class="form-control">
            <label for="">Raza</label>
            <input type="text" name="raza" class="form-control">
        </div>
        <div>
            <label for="">Edad</label>
            <input type="number" name="mascota_edad">
            <label for="">Fecha de recojo</label>
            <input type="date" name="fecha_recojo" class="form-control">
        </div>
        <div>
            <label for="">Imagen</label>
            <input type="file" id="mascota_imagen" name="mascota_imagen" class="form-control">
        </div>
        <div>
            <label for="">Descripción</label>
            <textarea name="mascota_descripcion" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <br>
        <div>
            <button type="submit"><strong>CREAR</strong></button>
        </div>
    </form>

    </div>

</x-app-layout>