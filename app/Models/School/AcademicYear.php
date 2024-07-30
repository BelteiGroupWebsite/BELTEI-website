<?php

namespace App\Models\School;

use App\Models\University\Certificate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use HasFactory;

    protected $table = "stb_academic_year";

    protected $fillable = [
        'start_academic_year',
        'created_at',
        'updated_at',
    ];

    public function studentGradeA()
    {
        return $this->hasMany(StudentGradeA::class, 'academic_year_id', 'id')
                    ->orderBy('start_academic_year', 'desc'); // Sort from largest to smallest
    }

}
