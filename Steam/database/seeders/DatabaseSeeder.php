<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(GroupeTableSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(EquipeSeeder::class);
        $this->call(UsagerTableSeeder::class);
        $this->call(JeuxTableSeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(RevueSeeder::class);
        $this->call(EquipeUsagerSeeder::class);
    }
}
