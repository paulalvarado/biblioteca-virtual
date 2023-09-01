<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Opciones;

class OpcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Rol por defecto
        $rol_defecto = new Opciones();
        $rol_defecto->key = 'rol_defecto';
        $rol_defecto->value = '3';
        $rol_defecto->save();
    }
}
