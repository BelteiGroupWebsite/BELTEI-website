<?php

namespace App\Models\School\Certificate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StbStudentInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'khmer_name',
        'latin_name',
        'gender',
        'dob',
        'nationality',
        'academic_batch_id',
        'certi_no',
        'profile_no',
        'moey_no',
    ];
}
