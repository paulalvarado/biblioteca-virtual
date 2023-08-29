<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioPruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuario Administrador por defecto
        $usuario_defecto = new User();
        $usuario_defecto->nombre = 'Admin';
        $usuario_defecto->apellido = 'Biblioteca Virtual';
        $usuario_defecto->correo = 'admin@admin.com';
        $usuario_defecto->username = 'admin';
        $usuario_defecto->password = Hash::make('admin123');
        $usuario_defecto->id_rol = 1;
        $usuario_defecto->estado = 1;
        $usuario_defecto->save();

        // Usuario Editor por defecto
        $usuario_editor = new User();
        $usuario_editor->nombre = 'Editor';
        $usuario_editor->apellido = 'Biblioteca Virtual';
        $usuario_editor->correo = 'editor@editor.com';
        $usuario_editor->username = 'editor';
        $usuario_editor->password = Hash::make('editor123');
        $usuario_editor->id_rol = 2;
        $usuario_editor->estado = 1;
        $usuario_editor->save();

        // Usuario Lector por defecto
        $usuario_lector = new User();
        $usuario_lector->nombre = 'Lector';
        $usuario_lector->apellido = 'Biblioteca Virtual';
        $usuario_lector->correo = 'usuario@usuario.com';
        $usuario_lector->username = 'usuario';
        $usuario_lector->password = Hash::make('usuario123');
        $usuario_lector->id_rol = 3;
        $usuario_lector->estado = 1;
        $usuario_lector->save();
    }
}
