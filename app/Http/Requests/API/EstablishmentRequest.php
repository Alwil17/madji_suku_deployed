<?php

namespace App\Http\Requests\API;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EstablishmentRequest extends FormRequest
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
            "nom" => "required|string|max:255",
            "slug" => "nullable|string|max:255",
            "description_courte" => "required|string|max:255",
            "description_longue" => "nullable|string|max:255",
            "image" => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg',
            "banner" => "nullable|string|max:255",
            "address_principale" => "nullable|numeric",
            "website" => "nullable|string|max:255",
            "facebook" => "nullable|string|max:255",
            "whatsapp" => "nullable|string|max:255",
            "twitter" => "nullable|string|max:255",
            "instagram" => "nullable|string|max:255",
            "user_id" => "required|numeric",
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
