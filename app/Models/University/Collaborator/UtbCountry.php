<?php

namespace App\Models\University\Collaborator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtbCountry extends Model
{
    use HasFactory;

    protected $fillable = [
        'flag',
        'status',
    ];

    public function countryName(){
        return $this->hasMany(UtbCountryTranslations::class, 'utb_country_id' , 'id');
    }
    public function collaborators(){
        return $this->hasMany(UtbCollaborators::class, 'utb_country_id');
    }
}
