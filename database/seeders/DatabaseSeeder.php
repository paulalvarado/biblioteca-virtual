<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editoriales;
use App\Models\Etiquetas;
use App\Models\Libros;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            UsuarioPruebaSeeder::class,
            OpcionesSeeder::class,
            AutoresSeeder::class,
            GenerosSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
        Editoriales::factory(8)->create();
        Libros::factory(100)->create();
        Etiquetas::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
