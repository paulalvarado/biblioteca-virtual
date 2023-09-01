<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LibrosController extends Controller
{
    public function list_libros(Request $request)
    {
        // Validar y obtener los parámetros de paginación
        $page = $request->page;
        $limit = $request->has('limit') ? $request->limit : 10; // Valor predeterminado si no se proporciona
        $offset = ($page - 1) * $limit;
        $search = $request->has('search') ? $request->search : '';

        // obtener libros en caso de que search sea diferente de vacio
        if ($search != '') {
            $libros = Libros::with('autor')
                ->where('nombre_libro', 'like', '%' . $search . '%')
                ->orWhere('descripcion', 'like', '%' . $search . '%')
                ->orderByDesc('id_libro')
                ->orderByDesc('created_at')
                ->offset($offset)
                ->limit($limit)
                ->get();
        } else {
            $libros = Libros::with('autor')
                ->where('estado', 1)
                ->orderByDesc('id_libro')
                ->orderByDesc('created_at')
                ->offset($offset)
                ->limit($limit)
                ->get();
        }
        // obtener generos de cada libro
        foreach ($libros as $libro) {
            $libro->generos;
            $libro->etiquetas;
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Lista de libros',
            'paginacion' => [
                'page' => $page,
                'limit' => $limit,
                'offset' => $offset,
                'search' => $search,
                'total' => Libros::where('estado', 1)->count()
            ],
            'data' => $libros
        ], 200);
    }

    public function view_libro($id_libro)
    {
        // obtener libro por id
        try {
            $libro = Libros::findOrFail($id_libro);

            // verifica estado del libro
            if ($libro->estado == 0) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Libro no encontrado',
                    'data' => null
                ], 404);
            } else {
                // obtener generos del libro
                $libro->generos;
                // obtener etiquetas del libro
                $libro->etiquetas;
                return response()->json([
                    'status' => 'success',
                    'message' => 'Libro encontrado',
                    'data' => $libro
                ], 200);
            }
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Libro no encontrado',
                'data' => null
            ], 404);
        }
    }

    public function insert_libro(Request $request)
    {
        // valida los campos requeridos
        $this->validate($request, [
            'nombre_libro' => 'required|string',
            'descripcion' => 'required|string',
            'id_autor' => 'required|integer',
            'id_editorial' => 'required|integer',
            'fecha_publicacion' => 'required|date',
            'precio' => 'required|numeric',
            'precio_renta' => 'required|numeric',
            'stock' => 'required|integer',
            'stock_renta' => 'required|integer',
        ]);

        // Insertamos los datos del formulario en la tabla libros y retornamos el id del registro insertado
        $libro = Libros::create([
            'nombre_libro' => $request->nombre_libro,
            'descripcion' => $request->descripcion,
            'id_autor' => $request->id_autor,
            'id_editorial' => $request->id_editorial,
            'fecha_publicacion' => $request->fecha_publicacion,
            'precio' => $request->precio,
            'precio_renta' => $request->precio_renta,
            'stock' => $request->stock,
            'stock_renta' => $request->stock,
            'imagen_portada' => $request->imagen_portada,
            'estado' => 1,
        ]);

        // Guardamos los generos del libro en la tabla libro_genero
        $libro->generos()->attach($request->generos);

        // Guardamos las etiquetas del libro en la tabla libro_etiqueta
        $libro->etiquetas()->attach($request->etiquetas);

        // Retornamos el id del registro insertado
        return response()->json([
            'status' => 'success',
            'message' => 'Libro creado correctamente',
            'data' => $libro
        ], 200);
    }

    public function edit_libro(Request $request)
    {
        // valida los campos requeridos
        $this->validate($request, [
            'id_libro' => 'required|integer',
            'nombre_libro' => 'required|string',
            'descripcion' => 'required|string',
            'id_autor' => 'required|integer',
            'id_editorial' => 'required|integer',
            'fecha_publicacion' => 'required|date',
            'precio' => 'required|numeric',
            'precio_renta' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        try {
            // verifica si existe el libro
            $libro = Libros::findOrFail($request->id_libro);

            // Actualizamos los datos del formulario en la tabla libros
            $libro->update([
                'nombre_libro' => $request->nombre_libro,
                'descripcion' => $request->descripcion,
                'id_autor' => $request->id_autor,
                'id_editorial' => $request->id_editorial,
                'fecha_publicacion' => $request->fecha_publicacion,
                'precio' => $request->precio,
                'precio_renta' => $request->precio_renta,
                'stock' => $request->stock,
                'imagen_portada' => $request->imagen_portada,
                'estado' => 1,
            ]);

            // Guardamos los generos del libro en la tabla libro_genero
            $libro->generos()->sync($request->generos);

            // Guardamos las etiquetas del libro en la tabla libro_etiqueta
            $libro->etiquetas()->sync($request->etiquetas);

            // Retornamos el id del registro actualizado
            return response()->json([
                'status' => 'success',
                'message' => 'Libro actualizado correctamente',
                'data' => $libro->id_libro
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Libro no encontrado',
                'data' => null
            ], 404);
        }
    }

    public function delete_libro(Request $request)
    {
        // valida los campos requeridos
        $this->validate($request, [
            'id_libro' => 'required|integer',
        ]);

        try {
            // verifica si existe el libro
            $libro = Libros::findOrFail($request->id_libro);

            // verifica estado del libro
            if ($libro->estado == 0) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Libro no encontrado',
                    'data' => null
                ], 404);
            } else {
                // Actualizamos el estado del libro a 0
                $libro->update([
                    'estado' => 0,
                ]);

                // Retornamos el id del registro actualizado
                return response()->json([
                    'status' => 'success',
                    'message' => 'Libro eliminado correctamente',
                    'data' => $libro->id_libro
                ], 200);
            }
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Libro no encontrado',
                'data' => null
            ], 404);
        }
    }
}
