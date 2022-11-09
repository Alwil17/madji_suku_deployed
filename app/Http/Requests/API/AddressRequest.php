<?php

namespace App\Http\Requests\API;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AddressRequest extends FormRequest
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
            "libelle" => "nullable|string|max:255",
            "bp" => "nullable|string|max:20",
            "postal" => "nullable|string|max:20",
            "ville" => "required|string|max:100",
            "quartier" => "required|string|max:100",
            "pays" => "nullable|string|max:25",
            "email" => "nullable|string|max:100",
            "tel1" => "required|string|max:25",
            "tel2" => "nullable|string|max:25",
            "tel3" => "nullable|string|max:25",
            "address" => "required|string|max:255",
            "addressbis" => "nullable|string|max:255",
            "latitude" => "nullable|string|max:255",
            "longitude" => "nullable|string|max:255",
            "establishment_id" => "nullable|numeric",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }
}
