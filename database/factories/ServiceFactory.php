<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Entrepreneur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),                   // Genera un nombre de servicio (puede ser una empresa)
            'description' => $this->faker->text(200),             // Genera una descripción de servicio (hasta 200 caracteres)
            'price' => $this->faker->randomFloat(2, 10, 500),     // Genera un precio entre 10 y 500 con 2 decimales
            'availability' => $this->faker->boolean(),            // Genera un valor booleano para la disponibilidad (true/false)
            'entrepreneur_id' => Entrepreneur::factory(),          // Asocia un emprendedor aleatorio
            'category_id' => Category::factory(),  
        ];
    }
}
