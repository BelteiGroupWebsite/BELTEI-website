<?php

namespace App\Models\University\Certificate;

use App\Models\University\Degree;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtbDegreeAcademicbatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'degree_id',
        'batch',
        'academic_year',
    ];
    
    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degree_id' , 'id');
    }
    
    public function studentInfo(){
        return $this->hasMany(UtbStudentInfo::class, 'degree_academicbatch_id');
    }
    
}
