<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'method' => $this->faker->randomElement(['credit card', 'paypal', 'bank transfer']),
            'date' => $this->faker->dateTimeThisYear(),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'order_id' => Order::factory(),
        ];
    }
}
