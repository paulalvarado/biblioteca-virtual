<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LibroGenero;

class Libros extends Model
{
    use HasFactory;
    protected $table = 'libros';
    protected $primaryKey = 'id_libro';
    protected $fillable = [
        'nombre_libro',
        'descripcion',
        'id_autor',
        'id_editorial',
        'fecha_publicacion',
        'precio',
        'precio_renta',
        'stock',
        'imagen_portada',
        'estado',
        'created_at',
        'updated_at',
    ];

    //Relationships Many to Many
    public function generos()
    {
        return $this->belongsToMany(Generos::class, 'libro_genero', 'id_libro', 'id_genero');
    }

    public function etiquetas()
    {
        return $this->belongsToMany(Etiquetas::class, 'libro_etiqueta', 'id_libro', 'id_etiqueta');
    }

    // public function insert_generos($id_libro, $generos)
    // {
    //     // eliminamos los generos del libro
    //     LibroGenero::where('id_libro', $id_libro)->delete();

    //     // insertamos los nuevos generos
    //     foreach ($generos as $id_genero) {
    //         $libro_genero = new LibroGenero();
    //         $libro_genero->id_libro = $id_libro;
    //         $libro_genero->id_genero = $id_genero;
    //         $libro_genero->save();
    //     }
    // }

    // public function insert_etiquetas($id_libro, $etiquetas)
    // {
    //     // eliminamos las etiquetas del libro
    //     LibroEtiqueta::where('id_libro', $id_libro)->delete();

    //     // insertamos las nuevas etiquetas
    //     foreach ($etiquetas as $id_etiqueta) {
    //         $libro_etiqueta = new LibroEtiqueta();
    //         $libro_etiqueta->id_libro = $id_libro;
    //         $libro_etiqueta->id_etiqueta = $id_etiqueta;
    //         $libro_etiqueta->save();
    //     }
    // }
}
