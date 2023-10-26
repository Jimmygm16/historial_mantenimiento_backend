<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ComputerUpdateRequest extends FormRequest
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
            'name' => 'required|max:10|min:4|string|regex:/^[\pL\pN\-]+$/u|unique:computers,name',
            'brand' => 'required|max:255|min:1|string|regex:/^[\pL\pN\s\-]+$/u',
            'ram' => 'required|min:1|max:255|numeric|integer|min:0',
            'cpu' => 'required|min:2|max:30|string|regex:/^[\pL\pN\s\-]+$/u',
            'owner' => 'numeric|integer|min:1|nullable'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.max' => 'El nombre no puede superar los 10 caracteres',
            'name.min' => 'El nombre debe tener al menos 4 caracteres',
            'name.string' => 'El nombre debe ser una cadena de caracteres',
            'name.regex' => 'El nombre no puede contener espacios',
            'name.unique' => 'El nombre debe ser unico',

            'brand.required' => 'La marca es requerida',
            'brand.max' => 'La marca no puede superar los 255 caracteres',
            'brand.min' => 'La marca debe tener al menos 1 caracter',
            'brand.string' => 'La marca debe ser una cadena de caracteres',

            'ram.required' => 'La memoria RAM es requerida',
            'ram.min' => 'La memoria RAM debe ser al menos 1',
            'ram.max' => 'La memoria RAM no puede superar los 256',
            'ram.integer' => 'La memoria RAM debe ser un numero entero',
            'ram.numeric' => 'La memoria RAM debe ser un numero',

            'cpu.required' => 'La CPU es requerida',
            'cpu.min' => 'La CPU debe ser al menos 2',
            'cpu.max' => 'La CPU no puede superar los 30',
            'cpu.string' => 'La CPU debe ser una cadena de caracteres',
            'cpu.alpha_num' => 'La CPU debe ser una cadena de caracteres alfanumericos',

            'owner.numeric' => 'El propietario debe ser un numero',
            'owner.integer' => 'El propietario debe ser un numero entero'
        ];
    }
}
