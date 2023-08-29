<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Opciones;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function show(){
        $roles = Roles::all();
        return response()->json($roles);
    }

    public function rol_defecto(){
        $rol_defecto = Opciones::where('key', 'rol_defecto')->first();
        $get_rol = Roles::where('id_rol', $rol_defecto->value)->first();
        return response()->json($get_rol);
    }
}
