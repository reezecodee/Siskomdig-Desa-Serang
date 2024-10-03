<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'nama' => 'required|string|max:255',
            'usia' => 'required|max:3',
            'jenis_usaha' => 'required|string|max:255',
            'pendapatan' => 'required|max:255',
            'pendapatan_tertinggi' => 'required|max:255',
            'deskripsi' => 'required|string',
            'avatar' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'nama.string' => 'Nama harus berupa teks.',
            'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',

            'usia.required' => 'Usia wajib diisi.',
            'usia.integer' => 'Usia harus berupa angka.',
            'usia.max' => 'Usia tidak boleh lebih dari 3 digit.',

            'jenis_usaha.required' => 'Jenis usaha wajib diisi.',
            'jenis_usaha.string' => 'Jenis usaha harus berupa teks.',
            'jenis_usaha.max' => 'Jenis usaha tidak boleh lebih dari 255 karakter.',

            'pendapatan.required' => 'Pendapatan wajib diisi.',
            'pendapatan.max' => 'Pendapatan tidak boleh lebih dari 255 karakter.',

            'pendapatan_tertinggi.required' => 'Pendapatan tertinggi wajib diisi.',
            'pendapatan_tertinggi.max' => 'Pendapatan tertinggi tidak boleh lebih dari 255 karakter.',

            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'deskripsi.string' => 'Deskripsi harus berupa teks.',

            'avatar.nullable' => 'Avatar bersifat opsional.',
        ];
    }
}
