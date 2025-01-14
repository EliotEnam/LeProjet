<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class GroupeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('groupes')->insert([
            [
                'id' => 1,
                'nomCours'=>'A2024_gr003_dev_web',
                'nbEtud'=>30,
                
            ],
            [
                'id' => 2,
                'nomCours'=>'H2024_gr002_dev1',
                'nbEtud'=>21
            ],
            [
                'id' => 3,
                'nomCours'=>'H2023_gr001_reseau',
                'nbEtud'=>23
            ],
        ]);
    }
}
