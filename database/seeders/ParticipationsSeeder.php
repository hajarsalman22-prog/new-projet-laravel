<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;

class ParticipationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('participations')->insert([
            [
                'films_id' => 1,
                'acteur_id' => 1,
                'role' => 'Acteur principal',
                'type'=>'principale'
            ],
            [
                'films_id' => 1,
                'acteur_id' => 2,
                'role' => 'Secondaire',
                'type'=>'scientifique',

            ],
           ]);
            
    }
    }

