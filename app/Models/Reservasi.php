<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $fillable = [
        'name',
        'profile_id',
        'reservation_date',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
