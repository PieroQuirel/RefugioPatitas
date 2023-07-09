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
        <h1>Editar Mascota</h1>
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

    <form action="{{ route('panelmascotas.update', $mascota) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombre de la mascota</label>
            <input type="text" name="mascota_nombre" class="form-control" value="{{$mascota->mascota_nombre}}">
        </div>
        <div>
            <label for="">Estado</label>
            <select name="estado" id="">
                <option value="En adopcion" @selected("En adopcion" == $mascota->estado)>En adopción</option>
                <option value="Adoptado" @selected("Adoptado" == $mascota->estado)>Adoptado</option>
                <option value="En tratamiento" @selected("En tratamiento" == $mascota->estado)>En tratamiento</option>
            </select>
        </div>
        <div>
            <label for="">Tipo</label>
            <input type="text" name="tipo" class="form-control" value="{{$mascota->tipo}}">
            <label for="">Raza</label>
            <input type="text" name="raza" class="form-control" value="{{$mascota->raza}}">
        </div>
        <div>
            <label for="">Edad</label>
            <input type="number" name="mascota_edad" value="{{$mascota->mascota_edad}}">
            <label for="">Fecha de recojo</label>
            <input type="date" name="fecha_recojo" class="form-control" value={{$mascota->fecha_recojo}}>
        </div>
        <div>
            <label for="">Imagen</label>
            <input type="file" id="mascota_imagen" name="mascota_imagen" class="form-control" value="{{$mascota->mascota_imagen}}">
        </div>
        <div>
            <label for="">Descripción</label>
            <textarea name="mascota_descripcion" id="" cols="30" rows="5" class="form-control">{{$mascota->mascota_descripcion}}</textarea>
        </div>
        <br>
        <div>
            <button type="submit"><strong>ACTUALIZAR</strong></button>
        </div>
    </form>

    </div>

</x-app-layout>