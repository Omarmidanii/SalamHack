<?php

namespace Database\Seeders;

use App\Models\EntertainmentPlace;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class EntertainmentPlaceSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/entertainment.json'));
        $data = json_decode($json, true);


        if (is_array($data)) {
            foreach ($data as $entertainment) {

                DB::table('entertainment_places')->insert([
                    'name' => $entertainment['name'],
                    'location' => $entertainment['location'],
                    'address' => $entertainment['address'],
                    'description' => $entertainment['description'],
                    'price_range' => $entertainment['price_range'],
                    'rating' => $entertainment['rating'],
                    'type_of_activity' => $entertainment['type_of_activity'],
                    'open_time' => $entertainment['open_time'],
                    'close_time' => $entertainment['close_time'],
                    'contacts' => $entertainment['contacts'],
                ]);
            }
        }
    }
}
