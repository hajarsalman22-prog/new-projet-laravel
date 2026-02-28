<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnonceSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Annonce::create([
       'titre' => 'Appartement moderne',
       ' description' => 'Bel appartement au centre',
       ' type '=> 'Appartement',
       ' ville'=> 'Casablanca',
       ' superficie '=> 80,
       ' neuf' => true,
        'prix' => 900000
    ]);
  
    Annonce::create([
            'titre' => 'Villa à Marrakech',
            'description' => 'Belle villa avec piscine',
            'type' => 'Villa',
            'ville' => 'Marrakech',
            'superficie' => 250,
            'neuf' => false,
            'prix' => 3200000
        ] ,
        [
            'titre' => 'Villa à Marrakech',
            'description' => 'Belle villa avec piscine',
            'type' => 'Villa',
            'ville' => 'Marrakech',
            'superficie' => 250,
            'neuf' => false,
            'prix' => 3200000
        ],
        [
            'titre' => 'Villa à Marrakech',
            'description' => 'Belle villa avec piscine',
            'type' => 'Villa',
            'ville' => 'Marrakech',
            'superficie' => 250,
            'neuf' => false,
            'prix' => 3200000
        ]);  
}
}
