<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ComputersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker:: create();
        foreach (range(1, 10) as $index) {
            DB::table('computers')->insert([
                'computer_name' => $faker->unique()->regexify('Lab[1-9]-PC[0-9]{2}'),
                'model' => $faker->randomElement(['Dell Optiplex 7090', 'HP ProDesk 400', 'Lenovo ThinkCentre M720']),
                'operating_system' => $faker->randomElement([ 'Windows 10 Pro', 'Windows 11 Home', 'Ubuntu 20.04 LTS', 'macOS Monterey']),
                'processor'=> $faker->randomElement(['Intel Core i5-11400', 'Intel Core i7-11700', 'AMD Ryzen 5 5600X', 'AMD Ryzen 7 5800X']),
                'memory'=> $faker ->randomElement([8, 16, 32, 64]),
                'available' => $faker-> boolean(80),
                'created_at'=> now(),
                'updated_at'=> now(),
            ]);
        }
    }
}
