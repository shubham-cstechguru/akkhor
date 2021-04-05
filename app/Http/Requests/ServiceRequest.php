<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'service_title' => 'required|unique:mysql2.services',
            'service_description',
            'service_image' => 'required|max:1048|mimes:jpeg,jpg,png',
            'service_seo_title' => 'nullable',
            'service_seo_description' => 'nullable',
            'service_seo_keyword' => 'nullable',
        ];
    }
}
