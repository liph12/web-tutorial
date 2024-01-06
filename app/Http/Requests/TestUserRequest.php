<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestUserRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'required|email|unique:test_users',
            'gender' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field is required.',
            'email.required' => 'Email field is required.',
        ];
    }
}
