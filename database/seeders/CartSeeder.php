<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cart::factory()
            ->count(50)
            ->create()
            ->each(function ($cart) {
                CartItem::factory()
                    ->count(rand(1, 4))
                    ->create([
                        'cart_id' => $cart->id,
                    ]);
            });
    }
}
