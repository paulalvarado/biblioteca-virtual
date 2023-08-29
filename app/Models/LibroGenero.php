<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroGenero extends Model
{
    use HasFactory;
    protected $table = 'libro_genero';
    protected $primaryKey = 'id_libro_genero';
    protected $fillable = [
        'id_libro',
        'id_genero',
        'created_at',
        'updated_at',
    ];
}
