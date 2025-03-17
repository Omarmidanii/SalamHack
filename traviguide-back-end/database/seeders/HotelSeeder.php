<?php

use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    public function run()
    {
        Hotel::create([
            'name' => 'Example Hotel',
            'address' => 'Damascus, Syria',
            'price_range' => 'medium',
            'rating' => 4.2,
            'has_activity' => true,
            'room_sizes' => json_encode(['Single', 'Double', 'Suite']),
            'available_times' => json_encode(['08:00-22:00', '24/7']),
            'contacts' => json_encode(['+963 11 1234567', 'info@example.com']),
        ]);
    }
}
