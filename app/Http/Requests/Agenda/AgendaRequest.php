<?php

namespace App\Http\Requests\Agenda;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
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
            'judul_agenda' => 'required|string|max:255',
            'bulan' => 'required|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'tahun' => 'required|max:4|min:4',
            'tgl_pelaksanaan' => 'required|date',
            'keterangan' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'judul_agenda.required' => 'Judul agenda harus diisi.',
            'judul_agenda.string' => 'Judul agenda harus berupa teks.',
            'judul_agenda.max' => 'Judul agenda tidak boleh lebih dari 255 karakter.',

            'bulan.required' => 'Bulan harus diisi.',
            'bulan.in' => 'Bulan yang dipilih tidak valid. Harus berupa salah satu dari: Januari, Februari, Maret, April, Mei, Juni, Juli, Agustus, September, Oktober, November, Desember.',

            'tahun.required' => 'Tahun harus diisi.',
            'tahun.max' => 'Tahun harus terdiri dari 4 angka.',
            'tahun.min' => 'Tahun harus terdiri dari 4 angka.',

            'tgl_pelaksanaan.required' => 'Tanggal pelaksanaan harus diisi.',
            'tgl_pelaksanaan.date' => 'Tanggal pelaksanaan harus berupa format tanggal yang valid.',

            'keterangan.required' => 'Keterangan harus diisi.',
            'keterangan.string' => 'Keterangan harus berupa teks.',
        ];
    }
}
