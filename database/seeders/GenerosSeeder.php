<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Generos;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generos literarios
        $generos = [
            "Novela",
            "Poesía",
            "Cuento",
            "Ensayo",
            "Teatro",
            "Epopeya",
            "Fábula",
            "Ciencia ficción",
            "Fantasía",
            "Terror",
            "Misterio",
            "Aventura",
            "Realismo",
            "Realismo mágico",
            "Romántico",
            "Histórico",
            "Policiaco",
            "Thriller",
            "Distopía",
            "Utopía",
            "Sátira",
            "Humor",
            "Crónica",
            "Biografía",
            "Autobiografía",
            "Diario",
            "Cuento de hadas",
            "Mitología",
            "Leyenda",
            "Narrativa de viajes",
            "Literatura infantil",
            "Literatura juvenil",
            "Literatura erótica",
            "Literatura epistolar",
            "Literatura experimental",
            "Literatura gótica",
            "Literatura postapocalíptica",
            "Literatura de guerra",
            "Literatura de ciencia",
            "Literatura de viajes en el tiempo",
            "Literatura de suspenso",
            "Literatura de misterio",
            "Literatura histórica",
            "Literatura de detectives",
            "Literatura de espionaje",
            "Literatura negra (noir)",
            "Literatura de horror cósmico",
            "Literatura de supervivencia",
            "Literatura filosófica",
            "Literatura surrealista"
        ];

        foreach ($generos as $genero) {
            Generos::create([
                'nombre_genero' => $genero,
                'estado' => 1,
            ]);
        }
    }
}
