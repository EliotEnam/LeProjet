<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipeUsager extends Model
{
    protected $table = 'equipe_usager';
    protected $fillable = ['equipe_id','usager_id'];

}
