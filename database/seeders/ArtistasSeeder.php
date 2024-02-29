<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Defina os artistas de sua preferência
        $artistas = [
            ['nome' => 'Jão', 'categoria' => 'Pop'],
            ['nome' => 'MC Hariel', 'categoria' => 'Funk'],
            ['nome' => 'Cro', 'categoria' => 'HipHop'],
            ['nome' => 'João Gomes', 'categoria' => 'Piseiro'],
            ['nome' => 'Eminem', 'categoria' => 'Rap'],
        ];

        // Insira os artistas na tabela 'artistas'
        foreach ($artistas as $artista) {
            DB::table('artistas')->insert($artista);
        }
    }
}
