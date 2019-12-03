<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Movie::insert([
            ['title' => 'night',
            'director' => Str::random(10),
            'imageUrl' => Str::random(30),
            'duration' => 50,
            'releaseDate' => '11.11.2019',
            'genre' => Str::random(6)],

            ['title' => 'mladen night nijticnajti',
            'director' => Str::random(10),
            'imageUrl' => Str::random(30),
            'duration' => 50,
            'releaseDate' => '11.11.2010',
            'genre' => Str::random(6)],

            ['title' => 'night night night',
            'director' => Str::random(10),
            'imageUrl' => Str::random(30),
            'duration' => 50,
            'releaseDate' => '11.11.2005',
            'genre' => Str::random(6)]
        ]);
    }
}
