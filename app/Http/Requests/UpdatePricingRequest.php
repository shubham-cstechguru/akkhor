<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePricingRequest extends FormRequest
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
            'name' => 'required|unique:mysql.sch_plans,name,'.$this->pricing->id,
            'pricing_description',
            'cost' => 'required|numeric',
            'pricing_points' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The pricing title is required',
            'name.unique' => 'The pricing name is unique',
            'cost.required' => 'The pricing price is required',
            'cost.numeric' => 'The pricing price must be number',
        ];
    }
}
