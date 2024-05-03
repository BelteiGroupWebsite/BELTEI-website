<?php

namespace App\Models\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicBatch extends Model
{
    use HasFactory;

    protected $table = "utb_academic_batch";

    protected $fillable = [
        'start_academic_year',
        'batch',
        'created_at',
        'updated_at',
    ];
    
    public function graduatedBIU()
    {
        return $this->hasMany(Certificate::class, 'academic_year_id', 'id');
    }
    
}
