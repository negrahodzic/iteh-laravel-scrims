<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected  $fillable = ['rank', 'team_name', 'team_tag', 'wwcd',
        'placement_points', 'kill_points', 'total_points', 'games_missed', 'result_id'];

}
