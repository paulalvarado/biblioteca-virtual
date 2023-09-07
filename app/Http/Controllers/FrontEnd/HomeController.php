<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Etiquetas;
use App\Models\Libros;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // obtener etiquetas
        $etiquetas = Etiquetas::all();

        // obtener los libros con el estado =1
        $libros = Libros::where('estado', 1)->get();
        $data = [
            'etiquetas' => $etiquetas,
            'libros' => $libros
        ];
        return view('frontend.index', $data);
    }

    public function libros_etiqueta($etiqueta){
        // obtener etiquetas
        $etiquetas = Etiquetas::all();

        // obtener la etiqueta
        $etiqueta = Etiquetas::where('id_etiqueta', $etiqueta)->first();

        // obtener los libros con el estado =1 y la etiqueta teniendo en cuenta que un libro puede tener varias etiquetas
        $libros = Libros::where('estado', 1)->whereHas('etiquetas', function($query) use ($etiqueta) {
            $query->where('etiquetas.id_etiqueta', $etiqueta); // Especifica la tabla "etiquetas"
        })->get();
        $data = [
            'etiquetas' => $etiquetas,
            'etiqueta' => $etiqueta,
            'libros' => $libros
        ];
        return view('frontend.libros_etiqueta', $data);
    }

    public function pruebas()
    {
        return view('frontend.pruebas');
    }
}
