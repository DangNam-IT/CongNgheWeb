<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $renterIds = DB::table('renters')->pluck('id');
        for ($i = 0; $i < 50; $i++) { 
            DB::table('laptops')->insert([
                'brand' => $faker->company, 
                'model' => $faker->word . ' ' . $faker->word,
                'specifications' => '5GB RAM, 256GB SSD', 
                'rental_status' => $faker->boolean, 
                'renter_id' => $faker->randomElement($renterIds), 
                'created_at' => now(), 
                'updated_at' => now(), 
            ]);
        }
    }
}
