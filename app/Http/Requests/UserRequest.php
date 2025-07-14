<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo name é obrigatório',
            'name.string' => 'O campo name deve ser do tipo texto',

            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ter um formato de email válido',
            'email.unique' => 'Email já cadastrado na base de dados',

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
