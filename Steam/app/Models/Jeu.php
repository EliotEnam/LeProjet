<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{


    protected $table = 'jeux';
    protected $fillable = ['equipe_id','description','categorie_id','titre','tags','cover','nbTelech','note','annee','platforms'];

    public function revues(){
        return $this->hasMany(Revue::class);
    }
    
    public function equipe(){
        return $this->belongsTo(Equipe::class);
    }
    
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function media(){
        return $this->hasOne(Media::class);
    }

}
