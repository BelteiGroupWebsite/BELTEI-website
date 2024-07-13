<?php

namespace App\Models\school;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = "stb_program";
    protected $fillable = [
        'program_eng',
        'program_kh',
        'created_at',
        'updated_at',
    ];

    public function academicBatch()
    {
        return $this->hasMany(AcademicBatch::class, 'program_id', 'id');
    }
}
