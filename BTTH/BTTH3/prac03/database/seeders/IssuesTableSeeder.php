<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // Lấy danh sách ID từ bảng computers để liên kết với bảng issues
        $computerIds = DB::table('computers')->pluck('id');

        
        for ($i = 0; $i < 100; $i++) {
            DB::table('issues')->insert([
                'computer_id' => $faker->randomElement($computerIds),  
                'reported_by' => $faker->optional()->name, 
                'reported_date' => $faker->dateTimeBetween('-1 year', 'now'), 
                'description' => $faker->text(200),
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']), 
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']), 
            ]);
        }
    }
}
