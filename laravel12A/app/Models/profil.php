<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = [
        'company_name',
        'tagline',
        'about',
        'vision',
        'mission',
        'alamat',
        'hero_image',
    ];
}
