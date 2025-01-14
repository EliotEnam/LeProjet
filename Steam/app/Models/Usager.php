<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Usager extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usagers';
    


    public $fillable = [
        'matricule',
        'password',
        'equipe_id',
        'nom',
        'prenom',
        'nbPubli',
        'statut',
        'courriel'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function groupe(){
        return $this->belongsTo(Groupe::class);
    }

    public function equipes(){
        return $this->belongsToMany(Equipe::class);
    }

}
