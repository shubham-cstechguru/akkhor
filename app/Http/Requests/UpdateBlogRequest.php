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
            'blog_title' => 'required|unique:mysql2.blogs,blog_title,'.$this->blog->id,
            'blog_short_description' => 'required|max:250',
            'blog_description' => 'required',
            'blog_image' => 'nullable|max:2048|mimes:jpeg,jpg,png,gif',
            'category_id' => 'required',
            'tags_id' => 'required',
            'blog_seo_title' => 'nullable',
            'blog_seo_keyword' => 'nullable',
            'blog_seo_description' => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'category_id.required' => 'Please Select Category',
            'tags_id.required' => 'Please select Tags'
        ];
    }
}
