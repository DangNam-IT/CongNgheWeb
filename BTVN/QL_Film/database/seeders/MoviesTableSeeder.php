<?php 

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            ['title' => 'Avengers: Endgame', 'director' => 'Anthony và Joe Russo', 'release_date' => '2019-04-26', 'duration' => 181, 'cinema_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Inception', 'director' => 'Christopher Nolan', 'release_date' => '2010-07-16', 'duration' => 148, 'cinema_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Parasite', 'director' => 'Bong Joon-ho', 'release_date' => '2019-05-30', 'duration' => 132, 'cinema_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
