<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id'=>1,
                'image' => "https://gameranx.com/wp-content/uploads/2020/03/CoDModernWarfareWarzone3.jpg",
                'nom' => 'Action',
                'nbJeux' => 10
            ],
            [
                'id'=>2,
                'image' => "https://th.bing.com/th/id/R.e72e4fc0d9aec95fdcb6b1251bdaa292?rik=WPh3h7fSXoU%2fAA&pid=ImgRaw&r=0",
                'nom' => 'Aventure',
                'nbJeux' => 3
            ],
            [
                'id'=>3,
                'image' => 'https://www.gamersdecide.com/sites/default/files/authors/u141518/preview_screenshot2_119802.jpg',
                'nom' => 'RPG',
                'nbJeux' => 7
            ],
            [
                'id'=>4,
                'image' => 'https://www.videogameschronicle.com/files/2023/07/yx01x30xvvi91.jpg',
                'nom' => 'Course',
                'nbJeux' => 5
            ],
            [
                'id'=>5,
                'image' => 'https://www.pcgamesn.com/wp-content/uploads/2021/05/best-sports-games-1.jpg',
                'nom' => 'Sport',
                'nbJeux' => 8
            ],
            [
                'id'=>6,
                'image' => 'https://media.wired.co.uk/photos/606dae60f19707fe1aef38f4/16:9/w_1280,c_limit/CivilizationVI_screenshot_announce1.jpg',
                'nom' => 'Stratégie',
                'nbJeux' => 4
            ],
            [
                'id'=>7,
                'image' => 'https://res.cloudinary.com/lmn/image/upload/e_sharpen:100/f_auto,fl_lossy,q_auto/v1/gameskinnyc/e/v/i/evil-within-gamescom-screen-9d077.jpg',
                'nom' => 'Horreur',
                'nbJeux' => 2
            ],
            [
                'id'=>8,
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/91yOcAIm-oL.png',
                'nom' => 'Puzzle',
                'nbJeux' => 6
            ],
            [
                'id'=>9,
                'image' => 'https://www.kakuchopurei.com/wp-content/uploads/2023/06/Microsoft-Flight-Simulator-2024.jpg',
                'nom' => 'Simulation',
                'nbJeux' => 9
            ],
            [
                'id'=>10,
                'image' => 'https://th.bing.com/th/id/OIP.HaS_dgBUSZGzog06Iz1gtwHaEK?rs=1&pid=ImgDetMain',
                'nom' => 'MMORPG',
                'nbJeux' => 12
            ],
            [
                'id'=>11,
                'image' => 'https://images4.alphacoders.com/174/174896.jpg',
                'nom' => 'Shooter',
                'nbJeux' => 15
            ],
            [
                'id'=>12,
                'image' => 'https://www.gematsu.com/wp-content/uploads/2023/12/Dragon-Ball-Sparking-ZERO_2023_12-07-23_003-1440x810.jpg',
                'nom' => 'Combat',
                'nbJeux' => 7
            ],
            [
                'id'=>13,
                'image' => 'https://th.bing.com/th/id/R.4fceff8ad70577d21380a8429bfe9c87?rik=7BKryMfRBgFuVw&pid=ImgRaw&r=0',
                'nom' => 'Plateforme',
                'nbJeux' => 5
            ],
            [
                'id'=>14,
                'image' => 'https://diamondlobby.com/wp-content/uploads/2022/07/Party-Panic.jpg',
                'nom' => 'Party Game',
                'nbJeux' => 4
            ],
            [
                'id'=>15,
                'image' => 'https://th.bing.com/th/id/R.0a38e437c41498ea74c2193297eee0e4?rik=Nud7Npmqqx6OlQ&riu=http%3a%2f%2fcdn.wccftech.com%2fwp-content%2fuploads%2f2015%2f02%2fGrand-Theft-Auto-V-15.jpg&ehk=sRvZ%2bZBlkpf9t3MCmXjwh9CMTwFURuEO2TbG%2bKWwQ%2fQ%3d&risl=1&pid=ImgRaw&r=0',
                'nom' => 'Monde-ouvert',
                'nbJeux' => 6
            ],
        ]);
        
    }
}
