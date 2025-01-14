<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revue extends Model
{

    protected $fillable = ['jeu_id','note','avis'];
    public function jeu(){
        return $this->belongsTo(Jeu::class);
    }

}
