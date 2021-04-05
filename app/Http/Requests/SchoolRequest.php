<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolRequest extends FormRequest
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
            'user.title',
            'user.fname' => 'required',
            'user.lname' => 'required',
            'user.mobile' => 'required|numeric|min:10',
            'user.email' => 'required|max:255',
            'user.gender',
            'user.dob',
            'user.address1',
            'user.address2',
            'user.city_id',
            'user.pin_code',
        ];
    }
}
