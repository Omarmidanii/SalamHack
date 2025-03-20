<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HotelSeeder extends Seeder
{
    public function run()
    {
        $json = File::get(database_path('seeders/data/hotels.json'));

        $data = json_decode($json, true);

        DB::table('hotels')->insert($data);
    }
}

