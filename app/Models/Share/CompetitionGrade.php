<?php

namespace App\Models\Share;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionGrade extends Model
{
    use HasFactory;
    protected $table = 'competition_grades';
    protected $fillable = [
        'competition_id',
    ];

    public function translate(){
        return $this->hasMany(Translate::class, 'content_id', 'id')
            ->where('table_name', 'grades')
            ->where('language_id', app()->getLocale());
        // return $this->hasMany(Translate::class, 'table_id', 'id')
        //     ->where('table_name', 'competitions');
    }
    
    public function competition()
    {
        return $this->belongsTo(Competition::class, 'competition_id', 'id');
    }
    public function batches()
    {
        return $this->hasMany(CompetitionBatch::class, 'grade_id', 'id')->orderBy('batch', 'asc');
    }
    public function videos()
    {
        return $this->hasManyThrough(
            CompetitionVideo::class,
            CompetitionBatch::class,
            'grade_id', // Foreign key on the competition_batches table...
            'batch_id', // Foreign key on the competition_videos table...
            'id', // Local key on the competitions table...
            'id' // Local key on the competition_batches table...
        );
    }
    public function tables()
    {
        return $this->hasManyThrough(
            Table::class,
            CompetitionBatch::class,
            'grade_id', // Foreign key on the competition_batches table...
            'batch_id', // Foreign key on the tables table...
            'id', // Local key on the competitions table...
            'id' // Local key on the competition_batches table...
        );
    }
}
