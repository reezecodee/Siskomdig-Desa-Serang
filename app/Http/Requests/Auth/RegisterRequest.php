<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|unique:users,username|max:10',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|unique:users,telepon|min:12|max:15',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:255',
            'confirm_password' => 'required|string|same:password'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username wajib diisi.',
            'username.unique' => 'Username ini sudah digunakan. Silakan pilih username lain.',
            'username.max' => 'Username tidak boleh lebih dari 10 karakter.',

            'nama.required' => 'Nama wajib diisi.',
            'nama.string' => 'Nama harus berupa teks.',
            'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',

            'telepon.required' => 'Nomor telepon wajib diisi.',
            'telepon.unique' => 'Nomor telepon ini sudah digunakan. Silakan masukkan nomor telepon lain.',
            'telepon.min' => 'Nomor telepon harus minimal 12 karakter.',
            'telepon.max' => 'Nomor telepon tidak boleh lebih dari 15 karakter.',

            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email ini sudah digunakan. Silakan masukkan email lain.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',

            'password.required' => 'Password wajib diisi.',
            'password.string' => 'Password harus berupa teks.',
            'password.min' => 'Password harus minimal 8 karakter.',
            'password.max' => 'Password tidak boleh lebih dari 255 karakter.',

            'confirm_password.required' => 'Konfirmasi password wajib diisi.',
            'confirm_password.string' => 'Konfirmasi password harus berupa teks.',
            'confirm_password.same' => 'Konfirmasi password harus sama dengan password.',
        ];
    }
}
