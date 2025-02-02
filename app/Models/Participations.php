<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participations extends Model
{
    /** @use HasFactory<\Database\Factories\ParticipationsFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function convention()
    {
        return $this->belongsTo(Conventions::class);
    }
}
