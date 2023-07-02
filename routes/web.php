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
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//RUTA DE INDEX usando la forma resource  | esto creo que ya no lo usé xD
Route::resource('/index', IndexController::class);

//RUTA DE CONTACTO usando la forma get
Route::get('/contacto', [ContactoController::class,'contacto']);
//RUTA DE MASCOTAS usando la forma resource
Route::resource('/mascotas', MascotasController::class);
//RUTA DE PERFIL usando la forma resource
Route::resource('/perfil', PerfilController::class);
//RUTA DE PRODUCTOS usando la forma resource
Route::resource('/productos', ProductosController::class);

// ------------------ADMINISTRADOR--------------------
//RUTA PARA VER EL PANEL DE MASCOTAS
//RESOURCE ES UTIL PARA LAS OPERACIONES CRUD - REVISAR ULTIMA CLASE DE DAI
Route::resource('/panelmascotas', PanelmascotController::class);
//RUTA PARA VER EL PANEL DE USUARIOS
Route::resource('/panelusuarios', PanelusuarController::class);
//RUTA PARA VER EL PANEL DE FORMULARIOS
Route::resource('/panelformularios', PanelformController::class);

//---RUTAS PARA VERIFICACION DE USUARIO ADMINISTRADOR Y NORMAL----
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