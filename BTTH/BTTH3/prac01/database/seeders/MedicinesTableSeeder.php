<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('medicines')->insert([
                'name' => $faker->word,
                'brand' => $faker->randomElement(['Panadol', 'Advil', 'Zinnat', 'Generic', 'Redoxon']), 
                'dosage' => $faker->randomElement(['100mg', '250mg', '500mg', '1000mg']), 
                'form' => $faker->randomElement(['Viên nén', 'Viên nang', 'Viên sủi', 'Dung dịch']),
                'price' => $faker->randomFloat(2, 1000, 100000), 
                'stock' => $faker->numberBetween(10, 500), 
            ]);
        }
    }
}
