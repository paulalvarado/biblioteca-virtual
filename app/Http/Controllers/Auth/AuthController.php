<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Opciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Contracts\Providers\JWT;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|unique:usuarios',
            'password' => 'required|string|min:6|confirmed',
            'nombre' => 'required|string',
            'correo' => 'required|email|unique:usuarios',
        ]);

        // obtener rol por defecto
        $rol_defecto = Opciones::where('key', 'rol_defecto')->first();

        $user = User::create([
            'username' => $request->username,
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'password' => Hash::make($request->password),
            'id_rol' => $rol_defecto->value,
            'estado' => 1
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'message' => 'Usuario creado exitosamente',
            'user' => $user,
            'token' => $token
        ], 201);
    }

    public function login(LoginRequest $request)
    {
        // verifica si las credenciales son correctas
        if (!$token = JWTAuth::attempt($request->only('username', 'password'))) {
            return response()->json([
                'message' => 'Usuario o contraseña incorrectos',
            ], 401);
        } else {
            // Obtén el usuario autenticado
            $user = Auth::user();
            // verifica si el usuario está activo
            if ($user->estado == 0) {
                return response()->json([
                    'message' => 'Usuario inactivo',
                ], 401);
            } else {
                return response()->json([
                    'message' => 'Inicio de sesión exitoso',
                    'user' => $user,
                    'token' => $token
                ], 201);
            }
        }
    }
}
