<?php

namespace App\Http\Requests;

use App\Rules\ReCaptchaRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'phoneno' => 'required|numeric|min:10',
            'message' => 'required',
            'recaptcha_token' => ['required', new ReCaptchaRule($this->recaptcha_token)]
        ];
    }
    public function messages()
    {        
        return [
            'name.required' => 'Please Enter Your Name',
            'email.required' => 'Please Enter Your Email',
            'email.email' => 'Please Enter Your Valid Email',
            'phoneno.required' => 'Please Enter Your Contact No.',
            'message.required' => 'Please Enter Your Message',
            'phoneno.min' => 'Your Number minimum of 10 digits',
        ];
    }
}
