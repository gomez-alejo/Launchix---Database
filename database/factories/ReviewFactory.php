<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rating' => $this->faker->numberBetween(1, 5),  // Genera una calificación entre 1 y 5
            'comment' => $this->faker->text(200),            // Genera un comentario con hasta 200 caracteres
            'date' => $this->faker->dateTimeThisYear(),     // Genera una fecha aleatoria dentro del año actual
            'product_id' => Product::factory(),              // Asocia un producto aleatorio
            'user_id' => User::factory(),
        ];
    }
}
