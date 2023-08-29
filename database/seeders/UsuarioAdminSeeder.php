<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuario por defecto
        $usuario_defecto = new User();
        $usuario_defecto->nombre = 'Paul';
        $usuario_defecto->apellido = 'Perez';
        $usuario_defecto->correo = 'admin@admin.com';
        $usuario_defecto->username = 'admin';
        $usuario_defecto->password = Hash::make('admin123');
        $usuario_defecto->id_rol = 1;
        $usuario_defecto->estado = 1;
        $usuario_defecto->save();
    }
}
