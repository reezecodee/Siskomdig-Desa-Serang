<?php

namespace App\Http\Requests\Feedback;

use Illuminate\Foundation\Http\FormRequest;

class UserFeedbackRequest extends FormRequest
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
            'nama_pengguna' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'saran_masukan' => 'required|max:500'
        ];
    }

    public  function messages()
    {
        return [
            'nama_pengguna.required' => 'Nama pengirim wajib diisi.',
            'nama_pengguna.string' => 'Nama pengirim harus berupa teks.',
            'nama_pengguna.max' => 'Nama pengirim tidak boleh lebih dari 255 karakter.',

            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',

            'saran_masukan.required' => 'Saran masukan wajib diisi.',
            'saran_masukan.max' => 'Saran masukan tidak boleh lebih dari 500 karakter.',
        ];
    }
}
