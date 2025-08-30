<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     protected $model = Payment::class;
    public function definition(): array
    {
        return [
            'order_id' => Order::inRandomOrder()->first()?->id,
            'payment_method' => $this->faker->randomElement(['Credit Card','PayPal','Bank Transfer','Cash']),
            'amount' => $this->faker->randomFloat(2, 50, 2000),
            'payment_date' => now(),
            'payment_status' => $this->faker->randomElement(['Pending','Completed','Failed']),
        ];
    }
}
