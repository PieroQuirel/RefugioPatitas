<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class PanelmascotController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::paginate(4);
        return view('panelmascotas.pmascotas',compact('mascotas'));
    }

    public function create()
    {
        return view('panelmascotas.agregar_mascota');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mascota_nombre' => ['required', 'string', 'max:45'],
            'estado' => ['in:En adopcion,Adoptado,En tratamiento'],
            'mascota_edad' => ['integer', 'max:30'],
            'mascota_imagen' => ['image','mimes:jpeg,jpg,png,svg']
        ]);

        $mascota = $request->all();

        if ($imagen = $request->file('mascota_imagen')) {
            $rutaDestinoImagen = 'imagen/';
            $NuevoNombreImagen = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaDestinoImagen, $NuevoNombreImagen);
            $mascota['mascota_imagen'] = "$NuevoNombreImagen";
        }

        Mascota::create($mascota);
        return redirect()->route('panelmascotas.index');
        
    }

    public function show(string $id)
    {
        //
    }

    public function edit($panelmascota)
    {
        $mascota = Mascota::find($panelmascota);
        return view('panelmascotas.editar_mascota',['mascota' => $mascota]);
    }

    public function update(Request $request, $panelmascota)
    {
        $mascota = Mascota::find($panelmascota);
        $mascota->update($request->all());
        return redirect()->route('panelmascotas.index');
    }

    public function destroy(string $id)
    {
        //
    }
}
