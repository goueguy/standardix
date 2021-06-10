<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use App\Models\Candidature;
class RendezVous extends Model
{
    use HasFactory;
    protected $table= 'rendez_vous';
    protected $fillable = [
        'objet',
        'label',
        'contenu',
        'user_id',
        'offre_id',
        'slug',
        'date_rendez_vous'
    ];

    public function candidature(){
        return $this->belongsTo(Candidature::class);
    }
}
