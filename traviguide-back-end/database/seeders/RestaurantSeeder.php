<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::create([
            'name' => 'Example Restaurant',
            'address' => 'Damascus, Syria',
            'price_range' => 'medium',
            'food_types' => (['Syrian', 'Mediterranean']),
            'character' => 'Traditional',
            'rating' => 4.5,
            'open_time' => '08:00:00',
            'close_time' => '22:00:00',
            'contacts' => (['+963 11 1234567', 'info@example.com']),
        ]);
    }
}
