<?php

namespace App\Http\Requests\Product;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
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
            'kategori_id' => 'required|exists:categories,id',
            'anggota_id' => 'required|exists:umkm_members,id',
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|integer',
            'foto_produk' => 'required|mimes:png,jpg,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'kategori_id.required' => 'Kategori harus diisi.',
            'kategori_id.exists' => 'Kategori yang dipilih tidak valid.',
            'anggota_id.required' => 'Pemilik harus diisi.',
            'anggota_id.exists' => 'Pemilik yang dipilih tidak valid.',
            'nama_produk.required' => 'Nama produk harus diisi.',
            'nama_produk.string' => 'Nama produk harus berupa teks.',
            'nama_produk.max' => 'Nama produk maksimal 255 karakter.',
            'deskripsi.required' => 'Deskripsi produk harus diisi.',
            'deskripsi.string' => 'Deskripsi produk harus berupa teks.',
            'harga.required' => 'Harga produk harus diisi.',
            'harga.integer' => 'Harga produk harus berupa angka.',
            'foto_produk.required' => 'Foto produk harus diunggah.',
            'foto_produk.mimes' => 'Foto produk harus berupa file dengan format: png, jpg, jpeg.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        session()->flash('failed', 'Gagal menambahkan produk UMKM, silahkan cek kembali input Anda.');

        throw new HttpResponseException(
            redirect()->back()->withErrors($validator)->withInput()
        );
    }
}
