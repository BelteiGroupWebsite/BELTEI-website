<?php

namespace App\Models\Share;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionVideo extends Model
{
    use HasFactory;
    protected $table = 'competition_videos';
    protected $fillable = [
        'batch_id',
        'rank',
        'embed',
    ];
    public function batch()
    {
        return $this->belongsTo(CompetitionBatch::class, 'batch_id', 'id');
    }
    public function grade()
    {
        return $this->hasOneThrough(
            CompetitionGrade::class,
            CompetitionBatch::class,
            'id', // Foreign key on the competition_batches table...
            'id', // Foreign key on the competition_grades table...
            'batch_id', // Local key on the competition_videos table...
            'grade_id' // Local key on the competition_batches table...
        );
    }
    public function competition()
    {
        return $this->hasOneThrough(
            Competition::class,
            CompetitionBatch::class,
            'id', // Foreign key on the competition_batches table...
            'id', // Foreign key on the competitions table...
            'batch_id', // Local key on the competition_videos table...
            'grade_id' // Local key on the competition_batches table...
        );
    }
    public function getEmbedAttribute($value)
    {
        return json_decode($value);
    }
    public function setEmbedAttribute($value)
    {
        $this->attributes['embed'] = json_encode($value);
    }
}
