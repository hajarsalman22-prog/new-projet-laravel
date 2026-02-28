<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('films')->insert([
            [
               
                'titre' => 'film',
                'pays'  => 'USA',
                'annee' => 2010,
                'duree' => '02:28:00',
                'genre' => 'Science-fiction'
            ],
            [
               
                'titre' => 'film2',
                'pays' => 'USA',
                'annee' => 2000,
                'duree' => '02:35:00',
                'genre' => 'Historique'
            ]
        ]);
    }
    }

