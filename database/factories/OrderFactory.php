<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::inRandomOrder()->first()?->id,
            'order_date' => now(),
            'shipping_address' => $this->faker->address(),
            'total_amount' => $this->faker->randomFloat(2, 50, 2000),
            'payment_status' => $this->faker->randomElement(['Pending', 'Completed', 'Failed', 'Refunded']),
            'shipping_status' => $this->faker->randomElement(['Pending', 'Shipped', 'Delivered', 'Returned']),

        ];
    }
}
