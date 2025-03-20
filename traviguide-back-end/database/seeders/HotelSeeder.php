<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HotelSeeder extends Seeder
{
    public function run()
    {
        // قراءة محتوى ملف JSON
        $json = File::get(database_path('seeders/data/hotels.json'));

        // تحويل البيانات إلى مصفوفة
        $data = json_decode($json, true);

        // إدخال البيانات في قاعدة البيانات
        DB::table('hotels')->insert($data);
    }
}

