<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Verifica si el usuario está autenticado
        if (!$user) {
            return response()->json(['message' => 'Unauthenticated'], 401);
        }

        // Verifica si el id_rol del usuario coincide con alguno de los roles permitidos
        foreach ($roles as $rol) {
            if ($user->id_rol == $rol) {
                return $next($request);
            }
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }
}
