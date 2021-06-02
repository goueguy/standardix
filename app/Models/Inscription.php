<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $table = "inscriptions";
    protected $fillable = [
        'nom',
        'prenoms',
        'password',
        'email',
        'contact',
        'lieu_habitation',
        'id_domaine'
    ];
}
