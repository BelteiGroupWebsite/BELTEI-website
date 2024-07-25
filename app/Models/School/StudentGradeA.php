<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGradeA extends Model
{
    use HasFactory;

    protected $table = "stb_student_grade_a";

    protected $fillable = [
        'khmer_name',
        'latin_name',
        'academic_year_id',
        'campus_id',
        'identify_user',
        'created_at',
        'updated_at',
    ];

    public function campus()
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }
    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }
    
    
}
