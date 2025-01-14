<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class JeuxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jeux')->insert([
            [
                'id' => 1,
                'equipe_id' => 1,
                'description' => "Grand Theft Auto V vous plonge dans un monde ouvert vaste et dynamique où les joueurs peuvent alterner entre trois personnages principaux : Michael, un ancien braqueur de banque en quête de rédemption, Trevor, un psychopathe impitoyable, et Franklin, un jeune homme ambitieux aspirant à sortir des quartiers difficiles. L'action se déroule dans la ville fictive de Los Santos, une réplique de Los Angeles, et ses environs. Entre courses effrénées, braquages, et missions dangereuses, GTA V offre une expérience immersive où la liberté d'action est totale.",
                'categorie_id' => 15,
                'titre' => 'GTA V',
                'platforms' => 'PC, PS3, PS4, PS5, Xbox360, XboxOne, Xbox Series',
                'annee' => 2013,
                'nbTelech' => 300000,
                'cover' => 'gta5.jpg',
                'tags' => 'monde-ouvert, action, aventure, course, crime',
                'note' => 4.8
            ],
            [
                'id' => 2,
                'equipe_id' => 1,
                'description' => "Grand Theft Auto VI, attendu comme le prochain chef-d'œuvre de Rockstar, nous plonge dans une toute nouvelle aventure où les joueurs pourront explorer la ville de Vice City et ses environs, inspirée de Miami. Le jeu promet un scénario captivant avec une narration dynamique et plusieurs personnages jouables, chacun ayant ses propres motivations. Entre l'action, les poursuites effrénées, et les choix moraux, GTA VI risque de redéfinir le genre des mondes ouverts et des jeux d'action.",
                'categorie_id' => 15,
                'titre' => 'GTA VI',
                'platforms' => 'PS5, Xbox Series',
                'annee' => 2025,
                'nbTelech' => 30000,
                'cover' => 'gta6.webp',
                'tags' => 'monde-ouvert, action, crime, aventure',
                'note' => 4.9
            ],
            [
                'id' => 3,
                'equipe_id' => 1,
                'description' =>"Uncharted 4 : A Thief’s End est l'ultime aventure de Nathan Drake, un chasseur de trésors emblématique. Le jeu suit Nathan dans sa quête pour retrouver un trésor mythique, alors qu'il se retrouve confronté à son passé et à des adversaires redoutables. Avec des graphismes impressionnants, un gameplay fluide, et des énigmes complexes, Uncharted 4 offre une aventure cinématographique où chaque mouvement et chaque décision compte, tout en offrant une réflexion profonde sur l'amour, l'amitié et la rédemption.",
                'categorie_id' => 2,
                'titre' => 'Uncharted 4',
                'platforms' => 'PC, PS4, PS5',
                'annee' => 2016,
                'nbTelech' => 260,
                'cover' => 'uncharted4.jpg',
                'tags' => 'action, aventure, exploration',
                'note' => 4.4
            ],
            [
                'id' => 4,
                'equipe_id' => 1,
                'description' => "The Last of Us Part II est la suite poignante de l'histoire d'Ellie et de Joel, deux survivants dans un monde dévasté par une pandémie. Le jeu explore des thèmes profonds de vengeance, de rédemption et de la nature humaine dans un contexte apocalyptique. Avec une narration riche et un gameplay qui met en avant la furtivité et l'interaction avec l'environnement, The Last of Us 2 est une expérience émotionnelle qui laisse une impression durable sur le joueur.",
                'categorie_id' => 7,
                'titre' => 'The Last of Us 2',
                'platforms' => 'PS4, PS5',
                'annee' => 2020,
                'nbTelech' => 416,
                'cover' => 'tlou2.avif',
                'tags' => 'action, drame, survie, narration',
                'note' => 4.9
            ],
            [
                'id' => 5,
                'equipe_id' => 1,
                'description' => "Spec Ops: The Line est un jeu de tir tactique à la troisième personne qui plonge le joueur au cœur de Dubaï, une ville abandonnée après une catastrophe. L'histoire suit un groupe d'élite de soldats qui partent en mission de sauvetage, mais découvrent rapidement que la situation est bien plus complexe et sombre qu'ils ne l'avaient imaginé. Avec des thèmes de guerre psychologique et de dilemmes moraux, Spec Ops offre une perspective unique sur le genre, remettant en question la notion de héros et de victime.",
                'categorie_id' => 11,
                'titre' => 'Spec Ops: The Line',
                'platforms' => 'PC, PS3, Xbox360',
                'annee' => 2012,
                'nbTelech' => 1500,
                'cover' => 'specops.jpg',
                'tags' => 'action, stratégie, guerre',
                'note' => 4.1
            ],
            [
                'id' => 6,
                'equipe_id' => 1,
                'description' => "Resident Evil 2 remake est une version modernisée de l'un des jeux de survie-horreur les plus emblématiques. Le joueur prend le contrôle de Leon Kennedy ou Claire Redfield, deux survivants du désastre de Raccoon City, où un virus a transformé la population en zombies et autres créatures monstrueuses. Le jeu combine des éléments de survie, de puzzles, et de combats intenses, avec des graphismes réimaginés et une atmosphère terrifiante, offrant une expérience de jeu palpitante et immersive.",
                'categorie_id' => 7,
                'titre' => 'Resident Evil 2',
                'platforms' => 'PC, PS4, PS5, XboxOne, Xbox Series',
                'annee' => 2019,
                'nbTelech' => 360,
                'cover' => 'resevil2.jpg',
                'tags' => 'survival, horreur, action',
                'note' => 3.9
            ],
            [
                'id' => 7,
                'equipe_id' => 1,
                'description' => "Need For Speed: Most Wanted est un jeu de course palpitant où le joueur doit se mesurer à une série de concurrents dans des courses effrénées à travers diverses villes. Avec un accent mis sur la vitesse, les poursuites policières et la personnalisation des véhicules, le jeu combine des éléments de liberté et de stratégie, en permettant aux joueurs de défier les forces de l'ordre et de devenir le conducteur le plus recherché. Une aventure à haute vitesse qui offre un gameplay excitant et sans fin.",
                'categorie_id' => 4,
                'titre' => 'Need for Speed: Most Wanted',
                'platforms' => 'PC, PS2, PS3, GameCube, Xbox, Xbox360',
                'annee' => 2005,
                'nbTelech' => 2500,
                'cover' => 'mw5.jpg',
                'tags' => 'course, action, arcade',
                'note' => 5.0
            ],
            [
                'id' => 8,
                'equipe_id' => 1,
                'description' => "Red Dead Redemption 2 est un jeu d'aventure en monde ouvert qui suit les péripéties d'Arthur Morgan, un membre d'un gang de hors-la-loi dans l'Amérique de la fin du XIXe siècle. Le jeu propose un environnement vaste et réaliste où chaque action, qu'il s'agisse de chasse, de vol, ou de combat, a des conséquences. Avec sa narration poignante, ses personnages profonds, et ses graphismes époustouflants, Red Dead Redemption 2 est une véritable œuvre d'art interactive qui transporte le joueur dans un monde sauvage, tout en mettant en avant des thèmes de loyauté, de survie et de moralité.",
                'categorie_id' => 15,
                'titre' => 'Red Dead Redemption 2',
                'platforms' => 'PC, PS4, PS5, XboxOne, Xbox Series',
                'annee' => 2018,
                'nbTelech' => 230,
                'cover' => 'rdr2.jpg',
                'tags' => 'monde-ouvert, western, aventure',
                'note' => 4.8
            ],
            [
                'id' => 9,
                'equipe_id' => 1,
                'description' => "Battlefield 3 est un jeu de tir militaire à la première personne qui plonge les joueurs dans des combats de grande envergure à travers le monde. Le jeu propose des batailles épiques avec une large variété de véhicules et d'armements, allant des tanks aux hélicoptères, dans des environnements destructibles et dynamiques. Avec un mode multijoueur intense et un mode solo captivant, Battlefield 3 se distingue par son gameplay stratégique et sa représentation réaliste des conflits modernes.",
                'categorie_id' => 11,
                'titre' => 'Battlefield 3',
                'platforms' => 'PC, PS4, PS5, XboxOne, Xbox Series',
                'annee' => 2011,
                'nbTelech' => 50,
                'cover' => 'bf3.jpg',
                'tags' => 'action, guerre, tir',
                'note' => 4.2
            ],
            [
                'id' => 10,
                'equipe_id' => 2,
                'description' => "Sparking Zero est un jeu de combat intense inspiré de l'univers de Dragon Ball. Le joueur prend le contrôle de personnages emblématiques de la série, chacun possédant ses propres capacités et techniques dévastatrices. Dans une série de combats intenses, le jeu propose des graphismes spectaculaires et un système de combat fluide où les joueurs peuvent exploiter des attaques spéciales et des transformations pour vaincre leurs ennemis. Une expérience de jeu épique pour les fans de la franchise Dragon Ball.",
                'categorie_id' => 12,
                'titre' => 'Sparking Zero',
                'platforms' => 'PC, PS5, Xbox Series',
                'annee' => 2024,
                'nbTelech' => 100,
                'cover' => 'sparkingZero.jpg',
                'tags' => 'action, combat, anime',
                'note' => 4.6
            ]
        ]);
        
    }
}
