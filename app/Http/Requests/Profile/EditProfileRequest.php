<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
        $userID = $this->route('id');

        return [
            'username' => 'required|max:10|unique:users,username,' . $userID,
            'nama' => 'required|string|max:255',
            'telepon' => 'required|min:12|max:15|unique:users,telepon,' . $userID,
            'email' => 'required|email|max:255|unique:users,email,' . $userID,
            'avatar' => 'nullable|mimes:png,jpg,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username harus diisi.',
            'username.max' => 'Username tidak boleh lebih dari 10 karakter.',
            'username.unique' => 'Username ini sudah digunakan, silakan pilih yang lain.',

            'nama.required' => 'Nama harus diisi.',
            'nama.string' => 'Nama harus berupa string.',
            'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',

            'telepon.required' => 'Telepon harus diisi.',
            'telepon.min' => 'Telepon harus terdiri dari minimal 12 karakter.',
            'telepon.max' => 'Telepon tidak boleh lebih dari 15 karakter.',
            'telepon.unique' => 'Nomor telepon ini sudah terdaftar, silakan gunakan yang lain.',

            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
            'email.unique' => 'Email ini sudah terdaftar, silakan gunakan yang lain.',

            'avatar.mimes' => 'Avatar harus berupa file dengan tipe: png, jpg, atau jpeg.'
        ];
    }
}
