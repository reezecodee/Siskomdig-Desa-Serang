@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Edit
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('show.memberUMKM') }}" class="btn btn-danger d-none d-sm-inline-block">
                            Kembali ke anggota UMKM
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <x-admin.alert.success :success="session('success')" />
    <form action="{{ route('update.member', $data->id) }}" method="post" enctype="multipart/form-data" id="form-edit">
        @csrf
        @method('PUT')
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-label">Foto anggota</p>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ $data->avatar ? asset('storage/profiles/' . $data->avatar) : 'https://avatars.githubusercontent.com/u/159593076?v=4' }}"
                                class="rounded-circle" width="200" height="200" id="imagePreview" alt="">
                            <input type="file" accept=".jpg, .png, .jpeg" name="avatar" id="inputImage"
                                style="display: none">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary" id="btn-upload">Upload avatar</button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Nama anggota UMKM</label>
                                    <input type="text" value="{{ old('nama', $data->nama) }}" name="nama"
                                        placeholder="Masukkan nama anggota UMKM"
                                        class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Usia</label>
                                    <input type="text" value="{{ old('usia', $data->usia) }}" name="usia"
                                        placeholder="Masukkan usia anggota"
                                        class="form-control @error('usia') is-invalid @enderror">
                                    @error('usia')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Pendapatan</label>
                                    <input type="number" value="{{ old('pendapatan', $data->pendapatan) }}"
                                        name="pendapatan" placeholder="Masukkan pendapatan anggota"
                                        class="form-control @error('pendapatan') is-invalid @enderror">
                                    @error('pendapatan')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Pendapatan tertinggi</label>
                                    <input type="number"
                                        value="{{ old('pendapatan_tertinggi', $data->pendapatan_tertinggi) }}"
                                        name="pendapatan_tertinggi" placeholder="Masukkan pendapatan tertinggi anggota"
                                        class="form-control @error('pendapatan_tertinggi') is-invalid @enderror">
                                    @error('pendapatan_tertinggi')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Jenis usaha</label>
                                    <input type="text" value="{{ old('jenis_usaha', $data->jenis_usaha) }}"
                                        name="jenis_usaha" placeholder="Masukkan jenis usaha anggota"
                                        class="form-control @error('jenis_usaha') is-invalid @enderror">
                                    @error('jenis_usaha')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Deskripsi pekerjaan</label>
                                    <textarea rows="7" name="deskripsi" placeholder="Masukkan deskripsi tentang pekerjaan anggota"
                                        class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $data->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="button" onclick="confirmAlert('form-edit')">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                                    <polyline points="16 16 12 12 8 16"></polyline>
                                    <line x1="12" y1="12" x2="12" y2="21"></line>
                                    <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                    <polyline points="16 16 12 12 8 16"></polyline>
                                </svg>
                                Edit anggota
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        let imagePreview = document.getElementById('imagePreview');
        let inputImage = document.getElementById('inputImage');
        let btnUpload = document.getElementById('btn-upload');

        // Saat tombol "Upload" diklik, membuka dialog input file
        btnUpload.addEventListener('click', () => {
            inputImage.click(); // Menggunakan click() untuk membuka dialog file
        });

        inputImage.addEventListener('change', function() {
            const file = this.files[0]; // Mendapatkan file yang dipilih
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result; // Mengganti src gambar dengan hasil file yang dibaca
                    imagePreview.style.display = 'block'; // Menampilkan preview
                }

                reader.readAsDataURL(file); // Membaca file sebagai URL data
            }
        });
    </script>
@endsection
