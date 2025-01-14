<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medias')->insert([
            [
                'jeu_id'=>1,
                'im2'=>'gta52.jpeg',
                'im3'=>'gta52.jpeg'
                
            ],
            [
                'jeu_id'=>2,
                'im2'=>'gta61jpg.jpg',
                'im3'=>'gta62.jpg'
                
            ],
            [
                'jeu_id'=>3,
                'im2'=>'uncha1.jpg',
                'im3'=>'uncha3.jpg'
                
            ],
            [
                'jeu_id'=>4,
                'im2'=>'tlou21.jpg',
                'im3'=>'tlou22.jpeg'
                
            ],
            [
                'jeu_id'=>5,
                'im2'=>'spo1.jpeg',
                'im3'=>'spo2.jpeg'
                
            ],
            [
                'jeu_id'=>6,
                'im2'=>'re1.jpeg',
                'im3'=>'re2.webp'
                
            ],
            [
                'jeu_id'=>7,
                'im2'=>'mw1.jpg',
                'im3'=>'mw2.jpg'
                
            ],
            [
                'jeu_id'=>8,
                'im2'=>'rdr21.jpg',
                'im3'=>'rdr22.avif'
                
            ],
            [
                'jeu_id'=>9,
                'im2'=>'bo31.jpeg',
                'im3'=>'bo32.jpeg'
                
            ],
            [
                'jeu_id'=>10,
                'im2'=>'sp2.jpg',
                'im3'=>'sp1.jpeg'
                
            ]
        ]);
    }
}
