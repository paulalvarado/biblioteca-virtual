<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LibroGenero;
use App\Models\Autores;
use App\Models\Editoriales;
use App\Models\Etiquetas;

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
        'stock_renta',
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

    public function autor()
    {
        return $this->belongsTo(Autores::class, 'id_autor');
    }
}
