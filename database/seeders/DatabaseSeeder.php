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
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin123'),
        'role' => "admin",
        'image' => 'https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff',
    ]);
         User::factory()->create([
        'name' => 'User',
        'email' => 'user@gmail.com',
        'password' => bcrypt('user123'),
        'role' => 'user',
        'image' => 'https://ui-avatars.com/api/?name=User&background=0D8ABC&color=fff',
    ]);


        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class,
            OrderSeeder::class,
            ShipmentSeeder::class,
            CartSeeder::class,
            PaymentSeeder::class,
        ]);
    }
}
