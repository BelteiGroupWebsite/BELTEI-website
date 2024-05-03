<?php

namespace App\Models\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $table = "utb_major";
    protected $fillable = [
        'FacultyID',
        'MajorEnglish',
        'MajorKhmer',
        'created_at',
        'updated_at',
    ];
    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'FacultyID');
    }
}
