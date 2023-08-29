<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;
    protected $table = 'libros';
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
}
