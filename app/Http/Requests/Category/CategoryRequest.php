<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'nama_kategori' => 'required|string|max:255|unique:categories,nama_kategori'
        ];
    }

    public function messages()
    {
        return [
            'nama_kategori.required' => 'Nama kategori wajib diisi.',
            'nama_kategori.string' => 'Nama kategori harus berupa string.',
            'nama_kategori.max' => 'Nama kategori tidak boleh lebih dari :max karakter.',
            'nama_kategori.unique' => 'Nama kategori sudah terdaftar. Silakan gunakan nama kategori yang berbeda.',
        ];
    }
}
