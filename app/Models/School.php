<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $table = 'sch_schools';

    protected $casts = ['pricing_points' => 'array'];
}
