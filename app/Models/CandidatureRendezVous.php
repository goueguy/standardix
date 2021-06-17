<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatureRendezVous extends Model
{
    use HasFactory;
    protected $fillable = [

        "candidature_id",
        "rendez_vous_id"
    ];
}
