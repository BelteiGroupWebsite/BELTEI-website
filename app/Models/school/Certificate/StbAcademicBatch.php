<?php

namespace App\Models\School\Certificate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StbAcademicBatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_academic_year',
        'batch',
        'grade_id',
        'reference'
    ];
    public function grade()
    {
        return $this->belongsTo(StbGrade::class, 'grade_id');
    }
    public function studentInfo()
    {
        return $this->hasMany(StbStudentInfo::class, 'academic_batch_id' , 'id');
    }
}
