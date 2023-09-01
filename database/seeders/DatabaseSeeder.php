<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editoriales;
use App\Models\Etiquetas;
use App\Models\Libros;
use App\Models\Generos;

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

        // de 4 a 8 etiquetas por libro
        $libros = Libros::all();
        foreach ($libros as $libro) {
            $etiquetas = Etiquetas::inRandomOrder()->take(rand(4, 8))->pluck('id_etiqueta');
            $libro->etiquetas()->attach($etiquetas);
        }

        // de 1 a 3 generos por libro
        $libros = Libros::all();
        foreach ($libros as $libro) {
            $generos = Generos::inRandomOrder()->take(rand(1, 3))->pluck('id_genero');
            $libro->generos()->attach($generos);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
