<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        $classIds = DB::table('classes')->pluck('id');
        for ($i = 0; $i < 100; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName, 
                'last_name' => $faker->lastName, 
                'date_of_birth' => $faker->date('Y-m-d', '2007-12-31'),
                'parent_phone' => $faker->numerify('##########'),
                'class_id' => $faker->randomElement($classIds), 
            ]);
        }
    }
}
