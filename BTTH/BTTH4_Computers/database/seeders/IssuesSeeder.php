<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IssuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker:: create();
        foreach (range(1, 10) as $index) {
            DB::table('issues')->insert([
                'computer_id' => $faker->numberBetween(1,10),
                'reported_by'=> $faker->randomElement(['Leader','Manager', 'Engineer']),
                'reported_date' => $faker->dateTime(),
                'description' => $faker->realText(150),
                'urgency' => $faker->randomElement(['Low','Medium', 'High']),
                'status' => $faker->randomElement(['Open','In Progress', 'Resolved']),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
