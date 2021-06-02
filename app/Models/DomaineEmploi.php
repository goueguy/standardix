<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomaineEmploi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description_domaine_emplois',
        'user_id'
    ];
}
