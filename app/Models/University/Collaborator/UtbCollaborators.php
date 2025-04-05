<?php

namespace App\Models\University\Collaborator;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtbCollaborators extends Model
{
    use HasFactory;

    protected $table = 'utb_collaborators';

    protected $fillable = [
        'collaborator',
        'logo',
        'link',
        'photos',
        'utb_country_id',
        'branch_id'
    ];

    public function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
    public function country() {
        return $this->belongsTo(UtbCountry::class, 'utb_country_id');
    }
    public function collaborator(){
        return $this->hasMany(UtbCollaboratorTranslations::class, 'utb_collaborator_id');
    }
}
