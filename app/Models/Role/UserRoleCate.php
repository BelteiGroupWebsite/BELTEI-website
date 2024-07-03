<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoleCate extends Model
{
    use HasFactory;
    protected $table="uptbl_user_role_cate";
    public $timestamps = false;
    public function pageCategory()
    {
        return $this->hasOne(PageCategory::class , 'id', 'category_id',);
    }
    
}
