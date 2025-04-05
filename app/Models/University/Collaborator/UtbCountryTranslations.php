<?php

namespace App\Models\University\Collaborator;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtbCountryTranslations extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',
        'utb_country_id',
        'name',
    ];

    public function utb_country(){
        return $this->belongsTo(UtbCountry::class, 'utb_country_id');
    }
    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }
}
