<?php

namespace App\Http\Requests\AppInfo;

use Illuminate\Foundation\Http\FormRequest;

class AppUpdateRequest extends FormRequest
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
            'nama_aplikasi' => 'required|string|max:255',
            'keyword' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'favicon' => 'nullable|mimes:png,jpg,ico,jpeg',
            'telepon' => 'required|min:12|max:15',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'google_maps' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_aplikasi.required' => 'Kolom nama aplikasi harus diisi.',
            'nama_aplikasi.string' => 'Kolom nama aplikasi harus berupa teks.',
            'nama_aplikasi.max' => 'Kolom nama aplikasi tidak boleh lebih dari :max karakter.',

            'keyword.required' => 'Kolom keyword harus diisi.',
            'keyword.string' => 'Kolom keyword harus berupa teks.',
            'keyword.max' => 'Kolom keyword tidak boleh lebih dari :max karakter.',

            'deskripsi.required' => 'Kolom deskripsi harus diisi.',
            'deskripsi.string' => 'Kolom deskripsi harus berupa teks.',

            'favicon.mimes' => 'Kolom favicon harus berupa file dengan ekstensi: :values.',
            'favicon.mimetypes' => 'Kolom favicon harus bertipe file dengan ekstensi: :values.',

            'telepon.required' => 'Kolom telepon harus diisi.',
            'telepon.min' => 'Kolom telepon harus memiliki minimal :min karakter.',
            'telepon.max' => 'Kolom telepon tidak boleh lebih dari :max karakter.',

            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Kolom email harus berisi alamat email yang valid.',
            'email.max' => 'Kolom email tidak boleh lebih dari :max karakter.',

            'alamat.required' => 'Kolom alamat harus diisi.',
            'alamat.string' => 'Kolom alamat harus berupa teks.',

            'google_maps.required' => 'Kolom Google Maps harus diisi.',
        ];
    }
}
