<?php

namespace App\Http\Requests\Member;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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
        $memberID = $this->route('id');
        return [
            'nama' => 'required|string|max:255',
            'business_id' => 'required|exists:business_fields,id',
            'kampung' => 'required|string|max:255',
            'rt' => 'required|string|max:10',
            'rw' => 'required|string|max:10',
            'nib_sku' => 'nullable|string|max:255',
            'telepon' => 'required|unique:members,telepon,'.$memberID,
            'status' => 'required|in:Aktif,Tidak aktif',
            'avatar' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'nama.string' => 'Nama harus berupa teks.',
            'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',

            'business_id.required' => 'Bidang usaha wajib dipilih.',
            'business_id.exists' => 'Bidang usaha yang dipilih tidak valid.',

            'kampung.required' => 'Kampung wajib diisi.',
            'kampung.string' => 'Kampung harus berupa teks.',
            'kampung.max' => 'Kampung tidak boleh lebih dari 255 karakter.',

            'rt.required' => 'RT wajib diisi.',
            'rt.string' => 'RT harus berupa teks.',
            'rt.max' => 'RT tidak boleh lebih dari 10 karakter.',

            'rw.required' => 'RW wajib diisi.',
            'rw.string' => 'RW harus berupa teks.',
            'rw.max' => 'RW tidak boleh lebih dari 10 karakter.',

            'nib_sku.string' => 'NIB/SKU harus berupa teks.',
            'nib_sku.max' => 'NIB/SKU tidak boleh lebih dari 255 karakter.',

            'telepon.required' => 'Nomor telepon wajib diisi.',
            'telepon.unique' => 'Nomor telepon sudah terdaftar.',

            'status.required' => 'Status wajib diisi.',
            'status.in' => 'Status harus berupa "Aktif" atau "Tidak aktif".',

            'avatar.nullable' => 'Avatar tidak wajib diisi.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        session()->flash('failed', 'Gagal menambahkan anggota komunitas, silahkan cek kembali input Anda.');

        throw new HttpResponseException(
            redirect()->back()->withErrors($validator)->withInput()
        );
    }
}
