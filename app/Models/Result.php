<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected  $fillable = ['server_id', 'server_name', 'scrim_name', 'date_played'];

    public function scores()
    {
        return $this->hasMany('App\Models\Score');
    }

}
