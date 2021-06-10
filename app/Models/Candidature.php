<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RendezVous;
class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'firstname',
        'email',
        'metiers',
        'cv',
        'motivation',
        'status'
    ];

    public function metier(){
        return $this->hasOne(Metier::class,'id','metiers');
    }

    public function offre(){
        return $this->belongsTo(Offre::class);
    }

    public function rendezvous(){
        return $this->hasMany(RendezVous::class);
    }
}
