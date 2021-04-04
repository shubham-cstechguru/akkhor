<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'sch_cities';

    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo(State::class, 'state');
    }
}
