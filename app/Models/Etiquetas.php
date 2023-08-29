<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquetas extends Model
{
    use HasFactory;
    protected $table = 'etiquetas';
    protected $primaryKey = 'id_etiqueta';
    protected $fillable = [
        'nombre_etiqueta',
        'estado',
        'created_at',
        'updated_at',
    ];

    //Relationships Many to Many
    public function libros()
    {
        return $this->belongsToMany(Libros::class, 'libro_etiqueta', 'id_etiqueta', 'id_libro');
    }
}
