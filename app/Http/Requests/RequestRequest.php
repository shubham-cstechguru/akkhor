<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|max:255',
            'company' => 'nullable',
            'phoneno' => 'required|numeric',
            'designation' => 'nullable',
            'test' => 'nullable',
            'daysToFinalize' => 'nullable',
            'requestedUrl' => 'nullable',
            'message' => 'nullable'
        ];
    }
    public function messages()
    {        
        return [
            'name.required' => 'Please Enter Your Name',
            'email.required' => 'Please Enter Your Email',
            'phoneno.required' => 'Please Enter Your Contact No.',
        ];
    }
}
