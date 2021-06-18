<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryOffre extends Model
{
    use HasFactory;
    protected $table = "category_offres";
    protected $fillable = [
        'category_offre_title',
        'category_offre_desc',
        'user_id',
        'category_offre_slug'
    ];

    public function offres(){
        return $this->hasMany(Offre::class,'id','category_offre_id');
    }
}
