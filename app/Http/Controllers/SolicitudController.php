<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Solicitud;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitudController extends Controller
{

    public function index()
    {
        //
    }

    public function create($mascota_id)
    {
        $user = Auth::id();
        $mascota = Mascota::find($mascota_id);
        dd($mascota);
        //return view('panelmascotas.agregar_mascota',compact('user','mascota'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show(Solicitud $solicitud)
    {
        //
    }

    public function edit($mascota_id) //CREAR FORMULARIO, se necesita de parámetro
    {
        $user = Auth::id();
        $mascota = Mascota::find($mascota_id);
        return view('solicitud',compact('user','mascota'));
    }

    public function update(Request $request, $mascota_id)
    {
        
        $request->validate([
            'dni' => ['required', 'integer', 'max:99999999'],
            'direccion' => ['required', 'string', 'max:60'],
            'comprobante_domicilio' => ['required','file','mimes:jpeg,jpg,png,pdf,doc,docx']
        ]);

        $solicitud = $request->all();

        if ($solicitud = $request->file('comprobante_domicilio')) {
            $rutaDestinoSolicitud = 'comprobantes/';
            $NuevoNombreSolicitud = date('YmdHis') . "." . $solicitud->getClientOriginalExtension();
            $solicitud->move($rutaDestinoSolicitud, $NuevoNombreSolicitud);
            $Solicitud['comprobante_domicilio'] = "$NuevoNombreSolicitud";
        }

        Solicitud::create($solicitud);
        return redirect()->route('');
        //dd($request->all());
    }

    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
