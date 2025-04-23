<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'spesialis_id',
        'years_of_experience',
        'price',
        'alumni',
        'practice_location',
        'str_number',
        'gambar',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function spesialisasi()
    {
        return $this->belongsTo(Spesialisasi::class, 'spesialis_id');
    }

    public function reservasis()
    {
        return $this->hasMany(Reservasi::class);
    }


}
