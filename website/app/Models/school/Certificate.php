<?php

namespace App\Models\school;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = "stb_certificate";

    protected $fillable = [
        'certi_no',
        'name_kh',
        'name_eng',
        'nation',
        'gender',
        'dob',
        'campus',
        'batch_startYear',
        'grade',
        'moey_id',
        'program',
        'identify_user',
        'created_at',
        'updated_at',
    ];
}
