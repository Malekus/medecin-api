<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class StoreConfigurationRequest extends FormRequest
{

    public function wantsJson()
    {
        return true;
    }

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
            'categorie' => 'required|max:20|alpha',
            'type' => 'required|max:20',
            'label' => 'required|max:20'
        ];
    }

    public function messages()
    {
        return [
            'categorie.required' => 'Le champ catégorie est obligatoire.',
            'type.required' => 'Le champ type est obligatoire.',
            'label.required' => 'Le champ label est obligatoire.',
            'categorie.max' => 'La catégorie ne peut pas dépasser 20 caractères.',
            'type.max' => 'Le type ne peut pas dépasser 20 caractères.',
            'label.max' => 'Le label ne peut pas dépasser 20 caractères.',
            'categorie.alpha' => 'La catégorie ne peut contenir que des lettres.',
            'type.alpha' => 'Le type ne peut contenir que des lettres.',
            'label.alpha' => 'Le label ne peut contenir que des lettres.'

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(['errors' => $errors
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
