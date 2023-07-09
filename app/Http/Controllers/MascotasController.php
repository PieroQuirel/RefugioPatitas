<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    public function index(){
        $mascotas = Mascota::all();
        return view('mascotas.mascotas',compact('mascotas'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $mascota = Mascota::find($id);
        return view('mascotas.ver_detalles',compact('mascota'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, $panelmascota)
    {
        //
    }

    public function destroy(string $id)
    { 
        //
    }


}