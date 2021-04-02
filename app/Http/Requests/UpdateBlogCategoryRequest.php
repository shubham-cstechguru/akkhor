<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_title' => 'required|unique:blog_categories,category_title,'.$this->blogcategory->id,
            'category_description' => 'required',
            'category_seo_title',
            'category_seo_keyword',
            'category_seo_description'
        ];
    }
}
