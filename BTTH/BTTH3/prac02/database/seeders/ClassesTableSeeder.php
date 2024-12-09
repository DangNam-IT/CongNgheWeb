<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // Tạo 100 bản ghi giả cho bảng classes
        for ($i = 0; $i < 100; $i++) {
            DB::table('classes')->insert([
                'class_type' => $faker->randomElement(['Pre-K', 'Kindergarten']), 
                'room_number' => strtoupper($faker->bothify('VH##')), 
            ]);
        }
    }
}
