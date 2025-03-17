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
        // User::factory(10)->create();
        $this->call(RestaurantSeeder::class);
        $this->call(EntertainmentPlaceSeeder::class);
        $this->call(HotelSeeder::class);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => "12345678"
        ]);
    }
}
