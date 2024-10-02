<?php

namespace App\Http\Requests\VisiMision;

use Illuminate\Foundation\Http\FormRequest;

class VisiMisionRequest extends FormRequest
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
            'visi' => 'required',
            'misi' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'visi.required' => 'Visi komunitas tidak boleh kosong',
            'misi.required' => 'Misi komunitas tidak boleh kosong'
        ];
    }
}
