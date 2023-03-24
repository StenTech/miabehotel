<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestionnaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prenoms',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
