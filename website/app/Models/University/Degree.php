<?php

namespace App\Models\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;
    protected $table = "utb_degree";
    protected $fillable = [
        'degree_eng',
        'degree_kh',
        'created_at',
        'updated_at',
    ];
    
    
    
    
}
