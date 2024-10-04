<?php

namespace App\Http\Requests\Information;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
            'thumbnail' => 'required|mimes:png,jpg,jpeg',
            'judul' => 'required|string|max:255',
            'konten_informasi' => 'required',
            'visibilitas' => 'required|in:Publik,Privasi'
        ];
    }

    public function messages()
    {
        return [
            'thumbnail.required' => 'Thumbnail wajib diisi.',
            'thumbnail.mimes' => 'Harap gunakan format gambar png, jpg, atau jpeg.',

            'judul.required' => 'Judul informasi harus di isi.',
            'judul.string' => 'Judul informasi harus berupa teks',
            'judul.max' => 'Judul informasi tidak boleh lebih dari 255 karakter',

            'konten_informasi.required' => 'Konten informasi wajib diisi.',

            'visibilitas.required' => 'Visibilitas wajib diisi.',
            'visibilitas.in' => 'Visibilitas harus salah satu dari: Publik atau Privasi.',
        ];
    }
}
