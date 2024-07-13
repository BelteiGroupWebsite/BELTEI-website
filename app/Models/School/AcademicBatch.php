<?php

namespace App\Models\school;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicBatch extends Model
{
    use HasFactory;
    protected $table = "stb_academic_batch";

    protected $fillable = [
        'batch_startYear',
        'grade',
        'program_id',
        'created_at',
        'updated_at',
    ];
    
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function certificate()
    {
        return $this->hasMany(Certificate::class, 'academic_batch_id', 'id');
    }

}
