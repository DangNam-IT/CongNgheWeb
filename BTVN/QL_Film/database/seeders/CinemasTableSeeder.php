<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemasSeeder extends Seeder
{
    public function run()
    {
        DB::table('cinemas')->insert([
            ['name' => 'CGV Vincom', 'location' => 'Vincom Center, Hà Nội', 'total_seats' => 300, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Galaxy Nguyễn Du', 'location' => '116 Nguyễn Du, TP.HCM', 'total_seats' => 250, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

