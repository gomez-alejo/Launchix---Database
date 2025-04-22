<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Entrepreneur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word() . ' ' . $this->faker->word(),  // Nombre del producto
            'description' => $this->faker->text(200),                       // Descripción del producto
            'price' => $this->faker->randomFloat(2, 10, 1000),               // Precio entre 10 y 1000 con 2 decimales
            'stock' => $this->faker->numberBetween(1, 1000),                 // Cantidad en stock entre 1 y 1000
            'image_paths' => json_encode([$this->faker->imageUrl(), $this->faker->imageUrl()]),  // Rutas de imágenes (arreglo JSON)
            'entrepreneur_id' => Entrepreneur::factory(),                    // Emprendedor aleatorio
            'category_id' => Category::factory(),   
        ];
    }
}
