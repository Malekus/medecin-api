<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class StorePatientRequest extends FormRequest
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
            'nom' => 'required|alpha',
            'prenom' => 'required|alpha',
            'numsecu' => 'required|max:15',
            'adresse' => 'required',
            'tel' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire.',
            'prenom.required' => 'Le champ prenom est obligatoire.',
            'numsecu.required' => 'Le champ numéro de sécurité sociale est obligatoire.',
            'adresse.required' => 'Le champ adresse est obligatoire.',
            'tel.required' => 'Le champ téléphone est obligatoire.',

            'nom.alpha' => 'Le nom ne peut contenir que des lettres.',
            'prenom.alpha' => 'Le prenom ne peut contenir que des lettres.',

            'numsecu.max' => 'Le numéro de sécurité sociale ne peut pas dépasser 20 caractères.',

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(['errors' => $errors
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
