<?php

namespace App\Models\School\Certificate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StbProgram extends Model
{
    use HasFactory;

    public function grade()
    {
        return $this->hasMany(StbGrade::class, 'program_id' , 'id');
    }   
}
