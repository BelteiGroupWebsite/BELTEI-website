<?php

namespace App\Models\University;

use App\Models\school\AcademicYear;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = "utb_certificate";

    protected $fillable = [
        'certi_no',
        'name_kh',
        'name_eng',
        'gender',
        'student_id',
        'dob',
        'academic_year_id',
        'major_id',
        'degree_id',
        'identify_user',
        'created_at',
        'updated_at',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degree_id');
    }
    public function academicBatch()
    {
        return $this->belongsTo(AcademicBatch::class, 'academic_year_id');
    }
    
}
