<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Editoriales>
 */
class EditorialesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_editorial' => $this->faker->company(),
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->phoneNumber(),
            'correo' => $this->faker->companyEmail(),
            // estado 0 = inactivo, 1 = activo
            'estado' => $this->faker->randomElement([0, 1]),
            'created_at' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-5 years', 'now'),
        ];
    }
}
