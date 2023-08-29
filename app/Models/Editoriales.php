<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editoriales extends Model
{
    use HasFactory;
    protected $table = 'editoriales';
    protected $primaryKey = 'id_editorial';
    protected $fillable = [
        'nombre_editorial',
        'direccion',
        'telefono',
        'correo',
        'estado',
        'created_at',
        'updated_at',
    ];
}
