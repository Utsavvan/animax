<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class season extends Model
{
    use HasFactory;
    public function episode()
    {
        return $this->hasMany(episode::class);
    }

    public function series()
    {
        return $this->belongsTo(series::class);
    }
}
