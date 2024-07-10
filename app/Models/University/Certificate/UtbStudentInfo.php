<?php

namespace App\Models\University\Certificate;

use App\Models\University\Major;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtbStudentInfo extends Model
{
    use HasFactory;
    protected $table = "utb_student_infos";
    protected $fillable = [
        'student_id',
        'khmer_name',
        'latin_name',
        'gender',
        'dob',
        'nationality',
        'degree_academicbatch_id',
        'major_id',
        'certi_no',
        'profile_no',
        'beltei_no',
        'moey_no',
    ];

    public function degreeAcademicbatch(){
        return $this->belongsTo(UtbDegreeAcademicbatch::class, 'degree_academicbatch_id');
    }
    public function major(){
        return $this->belongsTo(Major::class, 'major_id');
    }
    
}
