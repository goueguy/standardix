<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class PasswordSecurity extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "password_expiry_days",
        "password_updated_at"
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
