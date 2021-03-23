<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'blog_title' => 'required|unique:blogs',
            'blog_short_description' => 'required|max:250',
            'blog_description' => 'required',
            'blog_image' => 'required|max:200|mimes:jpeg,jpg,png,gif',
            'category_id' => 'required|array',
            'tags_id' => 'required|array',
            'blog_seo_title' => 'nullable',
            'blog_seo_keyword' => 'nullable',
            'blog_seo_description' => 'nullable'
        ];
    }
}
