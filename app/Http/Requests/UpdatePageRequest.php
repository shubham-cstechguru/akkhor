<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
            'page_title' => 'required',
            'page_description' => 'required',
            'page_image' => 'nullable|max:200|mimes:jpeg,jpg,png,gif',
            'page_seo_title' => 'nullable',
            'page_seo_description' => 'nullable',
            'page_seo_keyword' => 'nullable',
        ];
    }
}
