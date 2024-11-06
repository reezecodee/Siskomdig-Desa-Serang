<?php

namespace App\Http\Requests\Policy;

use Illuminate\Foundation\Http\FormRequest;

class PolicyRequest extends FormRequest
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
            'id' => 'nullable',
            'syarat_ketentuan' => 'required',
            'kebijakan_privasi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'syarat_ketentuan.required' => 'Syarat dan ketentuan wajib diisi.',
            'kebijakan_privasi.required' => 'Kebijakan privasi wajib diisi.',
        ];
    }
}
