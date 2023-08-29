<?php

namespace App\Http\Controllers;

use App\Models\Autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    public function insert_autor(Request $request){
        $this->validate($request, [
            'nombre_autor' => 'required',
            'nacionalidad' => 'required',
        ]);

        // Insertamos los datos del formulario en la tabla autores y retornamos el id del registro insertado
        $autor_id = Autores::create([
            'nombre_autor' => $request->nombre_autor,
            'nacionalidad' => $request->nacionalidad,
            'biografia' => $request->biografia,
            'estado' => 1,
        ]);

        // Retornamos el id del registro insertado
        return response()->json([
            'status' => 'success',
            'message' => 'Autor creado correctamente',
            'data' => $autor_id->id_autor
        ], 200);
    }

    public function list_autores(Request $request){
        $autores = Autores::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Lista de autores',
            'data' => $autores
        ], 200);
    }

    public function view_autor($id_autor){
        $autor = Autores::findOrFail($id_autor);
        // verifica estado del autor
        if($autor->estado == 0){
            return response()->json([
                'status' => 'error',
                'message' => 'Autor no encontrado',
                'data' => null
            ], 404);
        } else {
            return response()->json([
                'status' => 'success',
                'message' => 'Autor encontrado',
                'data' => $autor
            ], 200);
        }
    }

    public function edit_autor(Request $request){
        $this->validate($request, [
            'id_autor' => 'required',
            'nombre_autor' => 'required',
            'nacionalidad' => 'required',
        ]);

        // Insertamos los datos del formulario en la tabla autores y retornamos el id del registro insertado
        $autor_id = Autores::where('id_autor', $request->id_autor)->update([
            'nombre_autor' => $request->nombre_autor,
            'nacionalidad' => $request->nacionalidad,
            'biografia' => $request->biografia,
            'estado' => $request->estado,
        ]);

        // Retornamos el id del registro insertado
        return response()->json([
            'status' => 'success',
            'message' => 'Autor actualizado correctamente',
            'data' => $autor_id
        ], 200);
    }

    public function delete_autor(Request $request){
        $this->validate($request, [
            'id_autor' => 'required',
        ]);

        // Insertamos los datos del formulario en la tabla autores y retornamos el id del registro insertado
        $autor_id = Autores::where('id_autor', $request->id_autor)->update([
            'estado' => 0,
        ]);

        // Retornamos el id del registro insertado
        return response()->json([
            'status' => 'success',
            'message' => 'Autor eliminado correctamente',
            'data' => $autor_id
        ], 200);
    }
}
