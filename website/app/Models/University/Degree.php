<?php

namespace App\Models\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;
    protected $table = "utb_degree";
    protected $fillable = [
        'degree_eng',
        'degree_kh',
        'created_at',
        'updated_at',
    ];
    
    
    public function certificate()
    {
        return $this->hasMany(Certificate::class, 'degree_id', 'id');
    }
    public function academicBatch()
    {
        return $this->hasMany(AcademicBatch::class, 'degree_id', 'id');
    }
    
}
