<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $medicineIds = DB::table('medicines')->pluck('medicine_id');

        for ($i = 0; $i < 100; $i++) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->randomElement($medicineIds), 
                'quantity' => $faker->numberBetween(1, 50), 
                'sale_date' => $faker->dateTimeBetween('-1 year', 'now'), 
                'customer' => $faker->optional()->numerify('##########'), 
            ]);
        }
    }
}
