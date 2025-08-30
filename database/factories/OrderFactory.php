<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id,
            'order_date' => $this->faker->dateTimeThisYear(),
            'shipping_address' => $this->faker->address(),
            'total_amount' => 0,
            'payment_status' => $this->faker->randomElement(['Pending', 'Completed', 'Failed', 'Refunded']),
            'shipping_status' => $this->faker->randomElement(['Pending', 'Shipped', 'Delivered', 'Returned']),
        ];
    }

    /**
     * After creating an order, generate items and calculate total_amount
     */
    public function configure()
    {
        return $this->afterCreating(function (Order $order) {
            $items = OrderItem::factory()
                ->count(rand(1, 5))
                ->create([
                    'order_id' => $order->id,
                ]);

            
            $order->total_amount = $items->sum(fn($item) => $item->unit_price * $item->quantity);
            $order->save();
        });
    }
}
