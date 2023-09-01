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
}
