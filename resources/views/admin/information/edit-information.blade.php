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
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('show.myInformation') }}" class="btn btn-danger d-none d-sm-inline-block">
                            Kembali ke informasi milik saya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <form action="{{ route('update.information', $data->id) }}" method="POST" enctype="multipart/form-data" id="form-edit">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label class="form-label">Thumbnail</label>
                    <div class="d-flex justify-content-center">
                        <img src="{{ $data->thumbnail ? asset('storage/images/' . $data->thumbnail) : '' }}" class="my-2"
                            id="previewImage" alt="" srcset="">
                    </div>
                    <input type="file"
                        class="form-control @error('thumbnail')
                        is-invalid
                    @enderror"
                        name="thumbnail" id="inputImage" accept=".jpg, .png, .jpeg">
                    @error('thumbnail')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Judul informasi</label>
                    <input type="text" class="form-control @error('judul')
                        is-invalid @enderror"
                        name="judul" value="{{ old('judul', $data->judul) }}" placeholder="Masukkan judul informasi"
                        autocomplete="off" required>
                    @error('judul')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Konten informasi</label>
                    <textarea id="editor" name="konten_informasi" required>{{ old('konten_informasi', $data->konten_informasi) }}</textarea>
                    @error('judul')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <label class="form-label">Visibilitas</label>
                <div class="form-selectgroup-boxes row mb-3">
                    <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                            <input type="radio" name="visibilitas" value="Publik" class="form-selectgroup-input"
                                {{ old('visibilitas', $data->visibilitas) == 'Publik' ? 'checked' : 'checked' }}>
                            <span class="form-selectgroup-label d-flex align-items-center p-3">
                                <span class="me-3">
                                    <span class="form-selectgroup-check"></span>
                                </span>
                                <span class="form-selectgroup-label-content">
                                    <span class="form-selectgroup-title strong mb-1">Publik</span>
                                    <span class="d-block text-muted">Informasi yang kamu buat akan bisa langsung di
                                        lihat pengguna.</span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                            <input type="radio" name="visibilitas" value="Privasi" class="form-selectgroup-input"
                                {{ old('visibilitas', $data->visibilitas) == 'Privasi' ? 'checked' : '' }}>
                            <span class="form-selectgroup-label d-flex align-items-center p-3">
                                <span class="me-3">
                                    <span class="form-selectgroup-check"></span>
                                </span>
                                <span class="form-selectgroup-label-content">
                                    <span class="form-selectgroup-title strong mb-1">Privasi</span>
                                    <span class="d-block text-muted">Informasi yang kamu buat hanya dapat di lihat oleh
                                        Anda seorang.</span>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" onclick="confirmAlert('form-edit')" class="btn btn-primary"><svg class="icon"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg> Edit informasi saya</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        // Ambil elemen dari DOM
        const inputImage = document.getElementById('inputImage');
        const previewImage = document.getElementById('previewImage');

        // Event listener untuk saat pengguna memilih file gambar
        inputImage.addEventListener('change', function() {
            const file = this.files[0]; // Mendapatkan file yang dipilih

            if (file) {
                const reader = new FileReader(); // Buat objek FileReader

                reader.onload = function(e) {
                    // Saat file telah dibaca, masukkan hasilnya ke elemen img
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block'; // Tampilkan elemen img
                }

                // Baca file yang dipilih sebagai URL data
                reader.readAsDataURL(file);
            } else {
                // Jika tidak ada file yang dipilih, sembunyikan gambar
                previewImage.style.display = 'none';
                previewImage.src = '';
            }
        });
    </script>
@endsection
