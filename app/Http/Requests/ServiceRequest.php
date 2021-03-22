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
            'service_title' => 'required|unique:services',
            'service_description' => 'required',
            'service_image' => 'required|max:100|mimes:png,svg',
            'service_seo_title' => 'nullable',
            'service_seo_description' => 'nullable',
            'service_seo_keyword' => 'nullable',
        ];
    }
}