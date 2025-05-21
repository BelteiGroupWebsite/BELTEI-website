<?php

namespace App\Models\Share;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    use HasFactory;
    protected $table = 'translates';
    protected $fillable = [
        'table_name',
        'content_id',
        'language_id',
        'content_type',
        'translate',
    ];

}
