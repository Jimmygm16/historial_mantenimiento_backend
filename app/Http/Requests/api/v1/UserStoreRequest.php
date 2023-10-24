<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name'    =>'required|max:255|min:7|string|alpha:ascii',
            'email'   =>'required|max:255|min:7|string|email|unique:users,email|alpha_num:ascii|alpha_dash:ascii',
            'password'=>'required|min:8|max:255|string'
        ];
    }

    public function messages():array
    {
        'name.required' => 'El nombre es requerido',
        'name.max' => 'El nombre no puede tener mas de 255 caracteres'
    }
}
