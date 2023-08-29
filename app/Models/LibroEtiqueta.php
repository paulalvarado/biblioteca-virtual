<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroEtiqueta extends Model
{
    use HasFactory;
    protected $table = 'libro_etiqueta';
    protected $primaryKey = 'id_libro_etiqueta';
    protected $fillable = [
        'id_libro',
        'id_etiqueta',
        'created_at',
        'updated_at',
    ];
}
