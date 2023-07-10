<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Solicitud_Adopcion;
use Illuminate\Http\Request;

class PanelformController extends Controller
{

    public function index()
    {
        $solicitudes = Solicitud::all();
        return view('panelformularios.pformularios',compact('solicitudes'));
    }

    public function create()
    {
        //
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
