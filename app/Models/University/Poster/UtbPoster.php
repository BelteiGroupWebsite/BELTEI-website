<?php

namespace App\Models\University\Poster;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtbPoster extends Model
{
    use HasFactory;
    protected $table = 'utb_posters';

    protected $fillable = [
        'image',
        'branch'
    ];
}
