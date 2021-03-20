<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PricingRequest extends FormRequest
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
            'pricing_title' => 'required|unique:pricings',
            'pricing_description' => 'required',
            'price' => 'required|numeric',
            'pricing_points' => 'required|array',
        ];
    }
}
