<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
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
        ];
    }
    public function messages()
    {
        return [
            't_name.required' => 'user name is required.',
            't_testimonial.required' => 'user testimonial name is required.',
            't_testimonial.max' => 'The user testimonial must not be greater than 250 characters.',
        ];
    }
}
