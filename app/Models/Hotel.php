<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'hero_image',
        'longitude',
        'latitude',
        'description',
        'stars',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function gestionnaires()
    {
        return $this->hasMany(Gestionnaire::class);
    }
}
