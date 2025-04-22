<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entrepreneur>
 */
class EntrepreneurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'business_name'=>$this->faker->company(),
            'description'=>$this->faker->text(),
            'contact'=>$this->faker->phoneNumber(),
            'user_id'=> User::factory(),
        ];
    }
}
