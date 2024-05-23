<?php

namespace App\Models\University;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsDetail extends Model
{
    use HasFactory;
    protected $table = "utb_news_detail";
    protected $fillable = [
        'news_id',
        'header',
        'description',
        'language_id',
        'created_at',
        'updated_at',
    ];


    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
    

}
