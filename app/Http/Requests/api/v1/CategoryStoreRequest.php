<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|regex:/^[\pL\pM\s]+$/u',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.string' => 'El campo nombre debe ser una cadena de caracteres',
            'name.max' => 'El campo nombre debe tener un máximo de 255 caracteres',
            'name.regex' => 'El campo nombre debe contener solo letras'
        ];
    }
}
