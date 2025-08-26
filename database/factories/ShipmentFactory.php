<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Shipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipment>
 */
class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Shipment::class;
    public function definition(): array
    {
        return [
            'order_id' => Order::inRandomOrder()->first()?->id,
            'shipment_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'status' => $this->faker->randomElement(['Pending','In Transit','Delivered','Returned']),
        ];
    }
}
