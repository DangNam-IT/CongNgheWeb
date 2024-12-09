<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('computers')->insert([
                'computer_name' => $faker->company,  
                'model' => $faker->word,             
                'operating_system' => $faker->randomElement(['Windows 10', 'Linux', 'macOS']), 
                'processor' => $faker->randomElement(['Intel i5', 'Intel i7', 'AMD Ryzen 5']), 
                'memory' => $faker->randomElement([8, 16, 32]), 
                'available' => $faker->boolean,     
            ]);
        }
    }
}
