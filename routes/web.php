<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\PanelformController;
use App\Http\Controllers\PanelmascotController;
use App\Http\Controllers\PanelusuarController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\RespuestasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui se asignan las rutas que se mostrarán en la URL y nos llevarán a las
  vistas que le asignemos a los controladores respectivos.
|
*/
//VISTA PRINCIPAL
Route::get('/', function () {
    return view('index');
});

//RUTA DE INDEX usando la forma resource
//Route::resource('/index', IndexController::class);

//RUTA DE CONTACTO
Route::get('/contacto', [ContactoController::class,'contacto']);

//RUTAS RESOURCE
Route::resource('/mascotas', MascotasController::class);
Route::resource('/perfil', PerfilController::class);
Route::resource('/productos', ProductoController::class);
Route::resource('/solicitud', SolicitudController::class);
Route::resource('/preguntas', RespuestasController::class);

// ------------------ADMINISTRADOR--------------------
//RUTAS PARA PANELES (resource)
Route::resource('/panelmascotas', PanelmascotController::class);
Route::resource('/panelusuarios', PanelusuarController::class);
Route::resource('/panelformularios', PanelformController::class);

//---RUTAS PARA VERIFICACION DE USUARIOS SEGUN SUS ROLES----

// Rutas para el administrador
Route::middleware(['auth', 'veriEmail:admin'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');
    })->name('dashboard');
});

// Rutas para el usuario TRAEMOS EL METODO middleware
Route::middleware(['auth', 'veriEmail:usuario'])->group(function () {});

//------------------------------------------------------------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';