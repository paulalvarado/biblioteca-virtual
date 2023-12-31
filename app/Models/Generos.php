<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    use HasFactory;
    protected $table = 'generos';
    protected $primaryKey = 'id_genero';
    protected $fillable = [
        'nombre_genero',
        'estado',
        'created_at',
        'updated_at',
    ];

    //Relationships Many to Many
    public function libros()
    {
        return $this->belongsToMany(Libros::class, 'libro_genero', 'id_genero', 'id_libro');
    }
}
