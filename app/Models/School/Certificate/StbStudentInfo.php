<?php

namespace App\Models\School\Certificate;

// use App\Models\school\Campus;
use App\Models\School\Campus;
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
        'campus',
        'academic_batch_id',
        'certi_no',
        'profile_no',
        'moey_no',
        'ielts_no'
    ];

    public function campuses()
    {
        return $this->belongsTo(Campus::class, 'campus');
    }
    
}
