<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock_quantity' => $this->faker->numberBetween(1, 100),
            "category_id" => Category::inRandomOrder()->first()?->id,
            'brand' => $this->faker->company(),
            'rating_avg' => $this->faker->randomFloat(1, 1, 5),
            'image' => $this->faker->imageUrl(200, 200, 'products', true),
        ];
    }
}
