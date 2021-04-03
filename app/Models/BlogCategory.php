<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    /**
     * use second database
     * 
     * 
     */
    
    protected $connection = 'mysql2';

    protected $table = 'blog_categories';

    protected $guarded = [];
}
