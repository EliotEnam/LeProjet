<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class EquipeUsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('equipe_usager')->insert([
            [
                'usager_id'=> 1,
                'equipe_id'=> 1
                
            ],
            [
                'usager_id'=> 2,
                'equipe_id'=> 2
                
            ],
            [
                'usager_id'=> 3,
                'equipe_id'=> 1
            ],
            [
                'usager_id'=> 3,
                'equipe_id'=> 2
            ],
            [
                'usager_id'=> 4,
                'equipe_id'=> 1
            ],
            [
                'usager_id'=> 5,
                'equipe_id'=> 1
            ],
            [
                'usager_id'=> 6,
                'equipe_id'=> 3
            ],
            [
                'usager_id'=> 7,
                'equipe_id'=> 3
            ],
            [
                'usager_id'=> 8,
                'equipe_id'=> 3
            ],
            [
                'usager_id'=> 9,
                'equipe_id'=> 3
            ],
            [
                'usager_id'=> 10,
                'equipe_id'=> 2
            ],
        ]);
    }
}
