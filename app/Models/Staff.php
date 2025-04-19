<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'specialization',
        'years_of_experience',
        'price',
        'alumni',
        'practice_location',
        'str_number',
        'gambar',
        'user_id',
        'role',
    ];


    public function user()
{
    return $this->belongsTo(User::class);
}
}
