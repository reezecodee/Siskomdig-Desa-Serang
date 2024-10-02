<?php

namespace App\Http\Requests\Organization;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
            'gambar' => 'required|mimes:png,jpg,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'gambar.required' => 'Gambar harus diunggah.',
            'gambar.mimes' => 'Gambar harus berupa file dengan ekstensi: png, jpg, atau jpeg.',
        ];
    }
}
