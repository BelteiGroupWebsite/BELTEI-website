<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'ip_address',
        // 'public_ip',
        'visitor_id',
        'user_agent',
        'platform',
        'browser',
        'device',
    ];
}
