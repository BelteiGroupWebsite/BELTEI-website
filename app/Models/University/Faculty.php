<?php

namespace App\Models\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = "utb_faculty";
    protected $fillable = [
        'FacultyEnglish',
        'FacultyKhmer',
        'created_at',
        'updated_at',
    ];

    public function major()
    {
        return $this->hasMany(Major::class, 'FacultyID', 'id');
    }
}
