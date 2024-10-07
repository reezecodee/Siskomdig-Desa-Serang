<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
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
            'username' => 'required|exists:users,username',
            'email' => 'required|exists:users,email',
            'new_password' => 'required|min:8',
            'password_confirm' => 'required|same:new_password'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username wajib diisi.',
            'username.exists' => 'Username tidak ditemukan dalam sistem.',
            'email.required' => 'Email wajib diisi.',
            'email.exists' => 'Email tidak ditemukan dalam sistem.',
            'new_password.required' => 'Kata sandi wajib diisi.',
            'new_password.min' => 'Password minimal berisi 8 karakter.',
            'password_confirm.required' => 'Konfirmasi kata sandi wajib diisi.',
            'password_confirm.same' => 'Konfirmasi kata sandi harus sama dengan kata sandi.',
        ];
    }
}
