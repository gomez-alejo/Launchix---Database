<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = \App\Models\Order::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'=> $this->faker->dateTime(),
            'status'=>$this->faker->randomElement(['pending','shipped','delivered']),
            'total'=>$this->faker->randomFloat(2, 10, 100),
            'user_id'=> User::Factory(),
        ];
    }
}
