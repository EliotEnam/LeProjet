<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['jeu_id','im2','im3'];
    protected $table = 'medias';

    public function jeuMedia(){
        return $this->belongsTo(Jeu::class);
    }
}
