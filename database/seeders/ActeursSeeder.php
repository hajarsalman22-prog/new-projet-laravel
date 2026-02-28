<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;

class ActeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('acteurs')->insert([
            [
                'nom'=> 'salman ',
                'prenom'=>'hajar',
                'date_naissance' => '01-07-2006',
                'tel' => '0645978452',
                'pays'=>"maroc",

            ],
                [
                'nom'=> 'bakouba ',
                'prenom'=>'salma',
                'date_naissance' => null,
                'tel' => null,
                'pays'=>null,

                ]
        ]);
    }
    }

