<?php

namespace App\Models\Share;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $table = 'competitions';
    protected $fillable = [
        'branch_id',
    ];

    public function translate(){
        return $this->hasMany(Translate::class, 'content_id', 'id')
            ->where('table_name', 'competitions')
            ->where('language_id', app()->getLocale());
        // return $this->hasMany(Translate::class, 'table_id', 'id')
        //     ->where('table_name', 'competitions');
    }

    
    public function competitionGrades()
    {
        return $this->hasMany(CompetitionGrade::class, 'competition_id', 'id');
    }
    public function competitionBatches()
    {
        return $this->hasMany(CompetitionBatch::class, 'grade_id', 'id');
    }
    public function tables()
    {
        return $this->hasMany(Table::class, 'competition_id', 'id');
    }
    public function competitionVideos()
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
}
