<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieOffre extends Model
{
    use HasFactory;
    protected $table ="categories_offres";
    protected $fillable = [
        'nom',
        'description_categorie',
        'user_id'
    ];
}
