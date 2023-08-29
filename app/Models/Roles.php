<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id_rol';
    protected $fillable = [
        'nombre_rol',
        'permisos',
        'estado',
        'created_at',
        'updated_at'
    ];
}
