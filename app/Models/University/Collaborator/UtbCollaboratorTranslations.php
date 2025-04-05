<?php

namespace App\Models\University\Collaborator;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtbCollaboratorTranslations extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',
        'utb_collaborator_id',
        'description',
    ];
    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }
}
