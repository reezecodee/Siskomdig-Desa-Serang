<?php

namespace App\Http\Requests\Archive;

use Illuminate\Foundation\Http\FormRequest;

class ArchiveRequest extends FormRequest
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
            'gambar' => 'nullable|mimes:png,jpg,jpeg',
            'judul_arsip' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'files' => 'required|array',
            'files.*' => 'file|max:5120',
        ];
    }

    public function messages()
    {
        return [
            'gambar.mimes' => 'Thumbnail arsip harus berupa file dengan format PNG, JPG, atau JPEG.',
            'judul_arsip.required' => 'Judul arsip harus diisi.',
            'judul_arsip.string' => 'Judul arsip harus berupa teks.',
            'judul_arsip.max' => 'Judul arsip tidak boleh lebih dari 255 karakter.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'deskripsi.string' => 'Deskripsi harus berupa teks.',
            'files.required' => 'Setidaknya satu file harus diunggah.',
            'files.*.file' => 'Setiap file yang diunggah harus berupa file yang valid.',
            'files.*.max' => 'Setiap file tidak boleh lebih dari 5MB.',
        ];
    }
}
