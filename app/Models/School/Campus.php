<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $table = "stb_campus";

    protected $fillable = [
        'campus_kh',
        'campus_eng',
        'created_at',
        'updated_at',
    ];
}
