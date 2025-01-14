<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function jeux(){
        return $this->hasMany(Jeu::class);
    }
}
