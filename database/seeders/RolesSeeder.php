<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol1 = new Roles();
        $rol1->nombre_rol = 'Administrador';
        $rol1->permisos = serialize(['create', 'read', 'update', 'delete']);
        $rol1->estado = 1;
        $rol1->save();

        $rol2 = new Roles();
        $rol2->nombre_rol = 'Editor';
        $rol2->permisos = serialize(["create","read","update"]);
        $rol2->estado = 1;
        $rol2->save();

        $rol3 = new Roles();
        $rol3->nombre_rol = 'Usuario';
        $rol3->permisos = serialize(["read"]);
        $rol3->estado = 1;
        $rol3->save();
    }
}
