<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrim extends Model
{
    use HasFactory;

    public function slots()
    {
        return $this->hasMany('App\Models\Slot');
    }
}
