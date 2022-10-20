<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanetRequest extends FormRequest
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
            'japanese_name'=>'required|string|max:1000',
            'english_name'=>'required|string|max:1000',
            'radius'=>'required|integer|max:1000',
            'weight'=>'required|integer|max:1000',
        ];
    }
}
