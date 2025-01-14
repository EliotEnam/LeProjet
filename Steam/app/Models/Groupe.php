<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function usagers(){
        return $this->hasMany(Usager::class);
    }
}
