<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public function usagers(){
        return $this->belongsToMany(Usager::class);
    }
    public function jeuxEquipe(){
        return $this->hasMany(Jeu::class);
    }
    
}
