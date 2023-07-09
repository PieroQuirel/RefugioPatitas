<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class PanelusuarController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('panelusuarios.pusuarios',['users' => $users]);
    }

    public function create()
    {
        return view('panelusuarios.agregar_usuario');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:190'],
            'apellido' => ['required','string', 'max:190'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'edad' => ['max:2'],
            'celular' => ['max:10'],
            'rol' => ['in:Adoptante,Administrador,Veterinario']
        ]);

        $user = User::create([
            'name' => $request->name,
            'apellido' => $request ->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'edad' => $request->edad,
            'celular' => $request->celular,
            'rol' => $request->rol
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function show(string $id)
    {
        //
    }

    public function edit($panelusuario)
    {
        $user = User::find($panelusuario);
        return view('panelusuarios.editar_usuario',['user' => $user]);
    }

    public function update(Request $request, $panelusuario)
    {
        $user = User::find($panelusuario);
        $user->update($request->all());
        return redirect()->route('panelusuarios.index');
    }

    public function destroy(string $id)
    {
        //
    }
}
