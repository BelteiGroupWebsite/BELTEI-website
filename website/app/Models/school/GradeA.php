<?php

namespace App\Models\school;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeA extends Model
{
    use HasFactory;
    protected $table = "stb_grade_a";

    protected $fillable = [
        'khmer_name',
        'latin_name',
        'academic_year',
        'campus_id',
        'identify_user',
        'created_at',
        'updated_at',
    ];

    // public function campus()
    // {
    //     return $this->hasMany(Campus::class, 'campus_id', 'id');
    // }
    public function campus()
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }

}
