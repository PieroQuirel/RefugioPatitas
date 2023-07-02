<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    // FUNCION PARA MOSTRAR EL HTML
    public function pmascotas()
    {
        return View('administrador.pmascotas');
    }

    public function pusuario()
    {
        return View('administrador.pusuario');
    }

    public function pformularios()
    {
        return View('administrador.pformularios');
    }
}