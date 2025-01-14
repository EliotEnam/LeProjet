<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RevueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('revues')->insert([
            [
                'jeu_id' => 7,
                'note' => 5,
                'avis' => 'Meilleur jeu de tous les temps. Ne pas l\'avoir complété serait un crime.',
                'created_at' => '2024-10-16 14:30:00',
            ],            
            [
                'jeu_id'=>7,
                'note'=>3.5,
                'avis'=>'meh!!!',
                'created_at' => '2023-01-16 23:25:00',
            ],
        ]);
    }
}
