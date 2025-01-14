<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'matricule'=>458236,
                'password'=> Hash::make('fraulein1'),
                'nbPubli'=>0,
                'nom'=>'José',
                'groupe_id'=>1,
                'prenom'=>'Morino',
                'statut'=>'etudiant',
                'courriel'=>'1@gmail.com'
            ],
            [
                'groupe_id'=>1,
                'matricule'=>454636,
                'password'=> Hash::make('fraulein2'),
                'nbPubli'=>0,
                'nom'=>'Tokita',
                'prenom'=>'Ohma',
                'statut'=>'etudiant',             
                'courriel'=>'2@gmail.com'

            ],
            [
                'groupe_id'=>2,
                'matricule'=>457936,
                'password'=> Hash::make('fraulein3'),
                'nbPubli'=>0,
                'statut'=>'etudiant',
                'nom'=>'Yamashita',
                'prenom'=>'Kazuo',           
                'courriel'=>'3@gmail.com'
            ],
            [
                'groupe_id'=>2,
                'matricule'=>457836,
                'password'=> Hash::make('fraulein4'),
                'nbPubli'=>0,
                'statut'=>'etudiant',
                'nom'=>'rand',
                'prenom'=>'rand',            
                'courriel'=>'4@gmail.com'
            ],
            [
                'groupe_id'=>3,
                'matricule'=>458246,
                'password'=> Hash::make('fraulein5'),
                'nbPubli'=>0,
                'statut'=>'etudiant',
                'nom'=>'rand',
                'prenom'=>'rand',           
                'courriel'=>'5@gmail.com'
            ],
            [
                'groupe_id'=>3,
                'matricule'=>458238,
                'password'=> Hash::make('fraulein6'),
                'nbPubli'=>0,
                'statut'=>'etudiant',
                'nom'=>'rand',
                'prenom'=>'rand',          
                'courriel'=>'6@gmail.com'
            ],
            [
                'groupe_id'=>2,
                'matricule'=>458239,
                'password'=> Hash::make('fraulein7'),
                'nbPubli'=>0,
                'statut'=>'etudiant',
                'nom'=>'rand',
                'prenom'=>'rand',     
                'courriel'=>'7@gmail.com'
            ],
            [
                'groupe_id'=>3,
                'matricule'=>458230,
                'password'=> Hash::make('fraulein8'),
                'nbPubli'=>0,
                'statut'=>'etudiant',
                'nom'=>'rand',
                'prenom'=>'rand',    
                'courriel'=>'8@gmail.com'
            ],
            [
                'groupe_id'=>1,
                'matricule'=>458204,
                'password'=> Hash::make('fraulein9'),
                'nbPubli'=>0,
                'statut'=>'etudiant',
                'nom'=>'rand',
                'prenom'=>'rand',
                'courriel'=>'9@gmail.com'
            ],
            [
                'groupe_id'=>2,
                'matricule'=>458200,
                'password'=> Hash::make('fraulein10'),
                'nbPubli'=>0,
                'statut'=>'etudiant',
                'nom'=>'rand',
                'prenom'=>'rand',
                'courriel'=>'10@gmail.com'
            ],
            [
                'groupe_id'=>3,
                'matricule'=>786354,
                'password'=> Hash::make('frauleinprof'),
                'nbPubli'=>0,
                'statut'=>'professeur',
                'nom'=>'rand',
                'prenom'=>'rand',
                'courriel'=>'leProf@gmail.com'
            ]
        ]);
    }
}
