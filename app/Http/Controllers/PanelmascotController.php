<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class PanelmascotController extends Controller
{
    public function index()
    {
        return view('panelmascotas.pmascotas');
    }

    public function create()
    {
        return view('panelmascotas.agregar_mascota');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
