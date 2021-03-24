<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            'blog_title' => 'required',
            'blog_description' => 'required',
            'blog_image' => 'nullable|max:200|mimes:jpeg,jpg,png,gif',
            'category_id' => 'required',
            'tags_id' => 'required',
            'blog_seo_title' => 'nullable',
            'blog_seo_keyword' => 'nullable',
            'blog_seo_description' => 'nullable'
        ];
    }
}
