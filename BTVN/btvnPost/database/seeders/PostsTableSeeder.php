<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table(table:'posts')->insert(values:[
            'title' => $faker->text(),
            'content' => $faker->paragraph(),
            ]);
        }
    }
}