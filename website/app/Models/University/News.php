<?php

namespace App\Models\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "utb_news";
    protected $fillable = [
        'image',
        'date',
        'category',
        'created_at',
        'updated_at',
    ];

    public function newsDetail()
    {
        return $this->hasMany(NewsDetail::class, 'news_id', 'id');
    }
}
