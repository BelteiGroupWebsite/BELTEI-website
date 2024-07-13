<?php

namespace App\Models\School\Certificate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StbGrade extends Model
{
    use HasFactory;

    public function program()
    {
        return $this->belongsTo(StbProgram::class, 'program_id');
    }

    public function academicBatch()
    {
        // return $this->hasMany(StbAcademicBatch::class, 'grade_id', 'id');
        return $this->hasMany(StbAcademicBatch::class, 'grade_id', 'id')->orderByDesc('batch');
    }
    
    public function getSortedAcademicBatchAttribute()
    {
        return $this->academicBatch->sortByDesc('batch');
    }
    
}
