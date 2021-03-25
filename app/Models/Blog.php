<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $appends = ['blog_cateogry', 'blog_tags'];

    public function getBlogCategoryAttr() {
        $categories = [];
        if(!empty($this->blog_category)) {
            foreach($this->blog_category as $key => $cat) {
                $categories[] = $cat->name;
            }
        }

        return $categories;
    }

    public function getBlogTagsAttr() {
        
    }

    public function blog_category() {
        return $this->belongsToMany(BlogCategory::class, 'blog_category_data');
    }

    public function blog_tags() {
        return $this->belongsToMany(BlogTags::class, 'blog_tags_data');
    }
}
