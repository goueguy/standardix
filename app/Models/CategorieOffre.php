<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieOffre extends Model
{
    use HasFactory;
    protected $table = "categories_offres";
    protected $fillable = [
        'categorie_offre_title',
        'categorie_offre_desc',
        'user_id',
        'categorie_offre_slug'
    ];

    public function offres(){
        return $this->hasMany(Offre::class);
    }
}
