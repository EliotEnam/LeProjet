<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipes')->insert([
            [
                'numEquipe'=>0,
                'nbMembres'=>0,
                'id'=>1,
                
            ],
            [
                'numEquipe'=>1,
                'nbMembres'=>9,
                'id'=>2,
                
            ],
            [
                'numEquipe'=>5,
                'nbMembres'=>1,
                'id'=>3,
            ],
        ]);
    }
}
