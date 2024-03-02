<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Importing WithoutModelEvents class
use Illuminate\Database\Seeder; // Importing Seeder class
use Illuminate\Support\Facades\DB; // Importing DB facade

class ArtistasSeeder extends Seeder // Defining ArtistasSeeder class
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() // Method to run the database seeds
    {
        // Define your preferred artists
        $artistas = [
            ['nome' => 'Jão', 'categoria' => 'Pop'],
            ['nome' => 'MC Hariel', 'categoria' => 'Funk'],
            ['nome' => 'Cro', 'categoria' => 'HipHop'],
            ['nome' => 'João Gomes', 'categoria' => 'Piseiro'],
            ['nome' => 'Eminem', 'categoria' => 'Rap'],
            ['nome' => 'Billie Eilish', 'categoria' => 'Pop'],
            ['nome' => 'Anitta', 'categoria' => 'Pop'],
            ['nome' => 'Drake', 'categoria' => 'Rap'],
            ['nome' => 'Ariana Grande', 'categoria' => 'Pop'],
            ['nome' => 'Justin Bieber', 'categoria' => 'Pop'],
            ['nome' => 'Beyoncé', 'categoria' => 'Pop'],
            ['nome' => 'Kanye West', 'categoria' => 'Rap'],
            ['nome' => 'Travis Scott', 'categoria' => 'Rap'],
            ['nome' => 'Rihanna', 'categoria' => 'Pop'],
            ['nome' => 'Post Malone', 'categoria' => 'Rap'],
            ['nome' => 'Dua Lipa', 'categoria' => 'Pop'],
            ['nome' => 'Taylor Swift', 'categoria' => 'Pop'],
            ['nome' => 'Bad Bunny', 'categoria' => 'Reggaeton'],
            ['nome' => 'Cardi B', 'categoria' => 'Rap'],
            ['nome' => 'Ed Sheeran', 'categoria' => 'Pop'],
            ['nome' => 'Metallica', 'categoria' => 'Metal'],
            ['nome' => 'Queen', 'categoria' => 'Rock'],
            ['nome' => 'The Beatles', 'categoria' => 'Rock'],
            ['nome' => 'Led Zeppelin', 'categoria' => 'Rock'],
            ['nome' => 'Pink Floyd', 'categoria' => 'Rock'],
            ['nome' => 'AC/DC', 'categoria' => 'Rock'],
            ['nome' => 'Michael Jackson', 'categoria' => 'Pop'],
            ['nome' => 'Elvis Presley', 'categoria' => 'Rock'],
            ['nome' => 'David Bowie', 'categoria' => 'Rock'],
            ['nome' => 'Madonna', 'categoria' => 'Pop'],
            ['nome' => 'Nirvana', 'categoria' => 'Grunge'],
        ];

        // Insert the artists into the 'artistas' table
        foreach ($artistas as $artista) {
            DB::table('artistas')->insert($artista);
        }
    }
}