<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'date_edition',
        'date_limite',
        'lieu',
        'categorie_offre_id',
        'duree_contrat',
        'profil',
        'avantages',
        'dossier_candidature',
        'description_offres',
        'user_id',
        'slug'
    ];

    public function categorie(){
        return $this->hasOne(CategorieOffre::class,'id','categorie_offre_id');
    }

    public function candidatures(){
        return $this->hasMany(Candidature::class);
    }
}
