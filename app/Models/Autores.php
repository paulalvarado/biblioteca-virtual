<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
    use HasFactory;
    protected $table = 'autores';
    protected $primaryKey = 'id_autor';
    protected $fillable = ['nombre_autor', 'nacionalidad', 'biografia', 'estado', 'edad', 'created_at', 'updated_at'];
}
