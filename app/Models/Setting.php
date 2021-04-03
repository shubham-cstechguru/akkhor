<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

    /**
     * use second database
     * 
     * 
     */
    
    protected $connection = 'mysql2';

    protected $table = 'settings';
}
