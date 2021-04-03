<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * use second database
     * 
     * 
     */
    
    protected $connection = 'mysql2';

    protected $table = 'blogs';

    protected $guarded = [];

    protected $appends = ['blog_categories', 'tags'];

    public function getBlogCategoriesAttribute() {
        $categories = [];
        if(!empty($this->blog_category)) {
            foreach($this->blog_category as $key => $cat) {
                $categories[] = $cat->category_title;
            }
        }

        return $categories;
    }

    public function getTagsAttribute() {
        $tags = [];
        if(!empty($this->blog_tags)) {
            foreach($this->blog_tags as $key => $t) {
                $tags[] = $t->tags_title;
            }
        }

        return $tags;
    }

    public function blog_category() {
        return $this->belongsToMany(BlogCategory::class, 'blog_category_data');
    }

    public function blog_tags() {
        return $this->belongsToMany(BlogTags::class, 'blog_tags_data');
    }
}
