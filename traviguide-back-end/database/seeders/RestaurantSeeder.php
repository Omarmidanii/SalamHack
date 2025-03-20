<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Support\Facades\File;
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
        $json = File::get(database_path('seeders/data/restaurants.json'));

        $data = json_decode($json, true);

        if (is_array($data)) {
            foreach ($data as $restaurant) {
                DB::table('restaurants')->insert([
                    'name' => $restaurant['name'],
                    'location' => $restaurant['location'],
                    'address' => $restaurant['address'],
                    'description' => $restaurant['description'],
                    'price_range' => $restaurant['price_range'],
                    'food_types' => $restaurant['food_types'],
                    'character' => $restaurant['character'],
                    'rating' => $restaurant['rating'],
                    'open_time' => $restaurant['open_time'],
                    'close_time' => $restaurant['close_time'],
                    'contacts' => $restaurant['contacts'],
                ]);
            }
        }
    }
}
