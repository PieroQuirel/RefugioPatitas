<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Response;

class VeriEmailMiddleware
{
    //PARA QUE FUNCIONE TIENES QUE IR A HTTP/REQUESTS/KERNEL.PHP 
    public function handle(Request $request, Closure $next, $role = null)
    {
        $user = Auth::user();
        /* //Primero, verifica si se proporcionó un valor para $role y si existe un usuario autenticado ($user). 
        Luego, utiliza la función strpos() para verificar si el correo electrónico del usuario no contiene el fragmento '@admin.com'. 
        Si la condición se cumple, significa que el usuario no tiene un correo electrónico de administrador. */
        if ($role && $user && strpos($user->email, '@admin.com') === false) {
            return redirect('/'); // Si el usuario no tiene un correo de admin, redirige al URI raíz, (la página de inicio) 
        }

        return $next($request);
    }
}