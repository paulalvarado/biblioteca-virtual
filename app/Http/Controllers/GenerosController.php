<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generos;

class GenerosController extends Controller
{
    public function list_generos()
    {
        // obtener todos los generos con estado = 1
        $generos = Generos::where('estado', 1)->get();
        return response()->json([
            'status' => 'success',
            'message' => 'Lista de géneros literarios',
            'data' => $generos
        ], 200);
    }

    public function view_genero($id_genero)
    {
        $genero = Generos::findOrFail($id_genero);
        // verificamos el estado del genero
        if ($genero->estado == 0) {
            return response()->json([
                'status' => 'error',
                'message' => 'Género no encontrado',
                'data' => null
            ], 404);
        } else {
            return response()->json([
                'status' => 'success',
                'message' => 'Género encontrado',
                'data' => $genero
            ], 200);
        }
    }

    public function insert_genero(Request $request)
    {
        $this->validate($request, [
            'nombre_genero' => 'required|string',
        ]);

        $genero = new Generos();
        $genero->nombre_genero = $request->nombre_genero;
        $genero->estado = $request->estado;
        $genero->save();
        return response()->json([
            "status" => "success",
            "message" => "Se ha creado un nuevo género literario.",
            "id_genero" => $genero->id_genero
        ], 201);
    }

    public function edit_genero(Request $request)
    {
        $this->validate($request, [
            'nombre_genero' => 'required|string',
            'id_genero' => 'required|integer',
        ]);

        $genero = Generos::findOrFail($request->id_genero);
        $genero->nombre_genero = $request->nombre_genero;
        $genero->estado = $request->estado;
        $genero->save();
        return response()->json([
            "status" => "success",
            "message" => "Se ha actualizado el género literario.",
            "id_genero" => $genero->id_genero
        ], 200);
    }

    public function delete_genero(Request $request)
    {
        $this->validate($request, [
            'id_genero' => 'required|integer',
        ]);

        $genero = Generos::findOrFail($request->id_genero);
        $genero->delete();
        return response()->json([
            "status" => "success",
            "message" => "Se ha eliminado el género literario.",
            "id_genero" => $genero->id_genero
        ], 200);
    }
}
