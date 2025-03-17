<?php

namespace Database\Seeders;

use App\Models\EntertainmentPlace;
use Illuminate\Database\Seeder;

class EntertainmentPlaceSeeder extends Seeder
{
    public function run()
    {

        EntertainmentPlace::factory()->count(20)->create();

        EntertainmentPlace::create([
            'name' => 'Example Cinema',
            'location' => 'somewhere',
            'address' => 'Damascus, Syria',
            'price_range' => 'medium',
            'rating' => 4.5,
            'type_of_activity' => 'Cinema',
            'open_time' => '10:00:00',
            'close_time' => '22:00:00',
            'contacts' => json_encode(['+963 11 1234567', 'info@example.com']),
        ]);
    }
}
