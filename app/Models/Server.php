<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $fillable = ['server_id', 'enabled_bot', 'role_admin_id', 'role_results_id', 'channel_logs_id'];

    public function scrims()
    {
        return $this->hasMany('App\Models\Scrim');
    }
}
