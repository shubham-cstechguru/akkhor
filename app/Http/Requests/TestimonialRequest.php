<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            't_name' => 'required',
            't_testimonial' => 'required|max:250',
            't_image' => 'required|max:1048|mimes:jpeg,jpg,png'
        ];
    }
    public function messages()
    {
        return [
            't_name.required' => 'user name is required.',
            't_testimonial.required' => 'user testimonial name is required.',
            't_testimonial.max' => 'The user testimonial must not be greater than 250 characters.',
            't_image.required' => 'The user image is required.',
            't_image.max' => 'The user image must not be greater than 1mb',
            't_image.mimes' => 'The user image can be only png, svg, jpeg, jpg ,gif',
        ];
    }
}
