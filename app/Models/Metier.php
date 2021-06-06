<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metier extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_metier',
        'description_metier',
        'user_id',
        'slug'
    ];
}

