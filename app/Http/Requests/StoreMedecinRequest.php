<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class StoreMedecinRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function wantsJson()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom' => 'required',
            'prenom' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire.',
            'prenom.required' => 'Le champ prenom est obligatoire.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(['errors' => $errors
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
