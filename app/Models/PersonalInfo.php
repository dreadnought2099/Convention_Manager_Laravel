<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    /** @use HasFactory<\Database\Factories\PersonalInfoFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
