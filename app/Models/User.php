<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    
    protected $hidden  = [
        'password',
        'remember_token',
    ];

    public function schoolData()
    {
        return $this->hasOne('App\Model\School', 'uid', 'school');
    }

}