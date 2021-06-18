<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RendezVous;
use App\Models\CategoryOffre;
class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'date_edition',
        'date_limite',
        'lieu',
        'category_offre_id',
        'duree_contrat',
        'profil',
        'avantages',
        'dossier_candidature',
        'description_offres',
        'user_id',
        'slug'
    ];

    public function category(){
        return $this->belongsTo(CategoryOffre::class,'id');
    }

    public function candidatures(){
        return $this->hasMany(Candidature::class);
    }
    public function rendezVous(){
        return $this->hasMany(RendezVous::class);
    }
}
