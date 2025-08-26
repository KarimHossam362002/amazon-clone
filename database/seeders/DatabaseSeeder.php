<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
        'name' => 'Admin User',
        'email' => 'admin@example.com',
        'password' => bcrypt('admin123'),
        'image' => 'https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff',
    ]);


        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            CartSeeder::class,
            CartItemSeeder::class,
            ReviewSeeder::class,
            PaymentSeeder::class,
            ShipmentSeeder::class,
        ]);
    }
}
