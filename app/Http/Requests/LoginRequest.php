<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ter um formato de email válido',

            'password.required' => 'O campo senha é obrigatório',

        ];
    }

    public function failedValidation(Validator $validator){
        $errors = $validator->errors();

        throw new HttpResponseException(response()->json([
            'success' => false,
            'errors' => $errors,
        ], 422));
    }
}
