<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class series extends Model
{
    use HasFactory;
    public function season()
    {
        return $this->hasMany(season::class);
    }
    public function episode()
    {
        return $this->hasManyThrough(episode::class,season::class);
    }
}
