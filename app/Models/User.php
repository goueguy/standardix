<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\DomaineEmploi;
use App\Models\PasswordSecurity;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenoms',
        'email',
        'password',
        'niveau_acces',
        'contact',
        'lieu_habitation',
        'domaine_emploi_id',
        'cv',
        'motivation',
        'metier_id',
        'nom_entreprise'
    ];
    // public function roles(){
    //     return $this->hasMany(Role::class, 'id', 'role_id');
    // }
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function domaine(){
        return $this->hasOne(DomaineEmploi::class,'id','domaine_emploi_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function passwordSecurity()
    {
        return $this->hasMany('App\PasswordSecurity');
    }
}
