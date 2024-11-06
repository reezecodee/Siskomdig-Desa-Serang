<?php

namespace App\Http\Requests\Business;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BusinessFieldRequest extends FormRequest
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
            'nama_bidang_usaha' => 'required|string|max:255'
        ];
    }

    public function messages()
    {
        return [
            'nama_bidang_usaha.required' => 'Nama bidang usaha harus diisi.',
            'nama_bidang_usaha.string' => 'Nama bidang usaha harus berupa teks.',
            'nama_bidang_usaha.max' => 'Nama bidang usaha tidak boleh lebih dari 255 karakter.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        session()->flash('failed', 'Gagal menambahkan bidang usaha baru, silahkan cek kembali input Anda.');

        throw new HttpResponseException(
            redirect()->back()->withErrors($validator)->withInput()
        );
    }
}
