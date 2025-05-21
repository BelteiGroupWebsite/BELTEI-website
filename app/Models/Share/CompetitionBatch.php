<?php

namespace App\Models\Share;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionBatch extends Model
{
    use HasFactory;
    protected $table = 'competition_batches';
    protected $fillable = [
        'grade_id',
        'batch',
        'year',
    ];
    public function competition()
    {
        return $this->belongsTo(Competition::class, 'grade_id', 'id');
    }
    public function videos()
    {
        return $this->hasMany(CompetitionVideo::class, 'batch_id', 'id');
    }
    public function tables()
    {
        return $this->hasMany(Table::class, 'batch_id', 'id');
    }
    public function grade()
    {
        return $this->belongsTo(CompetitionGrade::class, 'grade_id', 'id');
    }
}
