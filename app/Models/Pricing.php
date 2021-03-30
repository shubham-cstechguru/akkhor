<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $table = 'sch_plans';

    protected $guarded = [];

    protected $casts = ['pricing_points' => 'array'];
}
