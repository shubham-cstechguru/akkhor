<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'page_title' => 'required|unique:pages',
            'page_description' => 'required',
            'page_image' => 'nullable|max:2048|mimes:jpeg,jpg,png,svg,gif',
            'page_seo_title' => 'nullable',
            'page_seo_description' => 'nullable',
            'page_seo_keyword' => 'nullable',
        ];
    }
}
