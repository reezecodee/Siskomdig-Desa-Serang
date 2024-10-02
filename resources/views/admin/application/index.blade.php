@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Application
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('show.dashboardAdmin') }}" class="btn btn-danger">
                                Kembali ke dashboard
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <p class="fw-bold">Upload favicon</p>
                        <div class="text-center">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="https://www.svgrepo.com/show/532809/file-zipper.svg" class="w-25 mx-auto"
                                    alt="" id="previewExample" style="display: none">
                            </div>
                            <div id="fileName" class="file-name mb-3" style="display: none;"></div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-center">
                                <input type="file" id="fileInput" style="display: none;" accept=".ico" name="favicon">
                                <button type="button" class="btn btn-primary" id="uploadButton">Pilih favicon</button>
                            </div>
                            <div id="error-message" style="display:none; color: red;"></div>
                            @error('favicon')
                                <div style="display:none; color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p class="fw-bold">Optimasi SEO</p>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Nama aplikasi</label>
                                    <input type="text" name="nama_aplikasi"
                                        class="form-control @error('nama_aplikasi') is-invalid
                                    @enderror"
                                        autocomplete="off" value="{{ old('nama_aplikasi') }}"
                                        placeholder="Masukkan nama aplikasi">
                                    @error('nama_aplikasi')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Keyword</label>
                                    <input type="text" name="keyword"
                                        class="form-control @error('keyword') is-invalid
                                    @enderror"
                                        autocomplete="off" value="{{ old('keyword') }}"
                                        placeholder="Masukkan keyword pencarian">
                                    @error('keyword')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea rows="7" type="text" name="deskripsi"
                                        class="form-control @error('deskripsi') is-invalid
                                    @enderror" autocomplete="off"
                                        placeholder="Masukkan deskripsi singkat tentang aplikasi">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <p class="fw-bold">Informasi aplikasi</p>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Telepon</label>
                                    <input type="text" name="telepon"
                                        class="form-control @error('telepon') is-invalid
                                    @enderror"
                                        autocomplete="off" value="{{ old('telepon') }}"
                                        placeholder="Masukkan telepon layanan aplikasi">
                                    @error('telepon')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid
                                    @enderror"
                                        autocomplete="off" value="{{ old('email') }}"
                                        placeholder="Masukkan email layanan aplikasi">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" name="alamat"
                                        class="form-control @error('alamat') is-invalid
                                    @enderror"
                                        autocomplete="off" value="{{ old('alamat') }}"
                                        placeholder="Masukkan alamat komunitas">
                                    @error('alamat')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-label">HTML Google Maps</label>
                                    <textarea rows="7" type="text" name="google_maps"
                                        class="form-control @error('google_maps') is-invalid
                                    @enderror" autocomplete="off"
                                        placeholder="Masukkan kode iframe HTML Google Maps">{{ old('google_maps') }}</textarea>
                                    @error('google_maps')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary"><svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-upload-cloud">
                                    <polyline points="16 16 12 12 8 16"></polyline>
                                    <line x1="12" y1="12" x2="12" y2="21"></line>
                                    <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                    <polyline points="16 16 12 12 8 16"></polyline>
                                </svg> Simpan pengaturan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        // Ambil elemen
        const uploadButton = document.getElementById('uploadButton');
        const fileInput = document.getElementById('fileInput');
        const previewExample = document.getElementById('previewExample');
        const fileNameDisplay = document.getElementById('fileName');
        const errorMessage = document.getElementById('error-message');

        // Saat tombol upload diklik
        uploadButton.addEventListener('click', function() {
            fileInput.click(); // Memicu input file untuk terbuka
        });

        // Saat file dipilih
        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0]; // Ambil file yang dipilih

            if (file) {
                // Validasi jika file adalah gambar .ico
                if (file.type !== 'image/x-icon' && file.name.split('.').pop() !== 'ico') {
                    errorMessage.style.display = 'block';
                    errorMessage.textContent = 'Harap pilih file .ico (icon)';
                    fileNameDisplay.style.display = 'none'; // Sembunyikan nama file jika tidak valid
                    return;
                }

                // Tampilkan nama file dan sembunyikan error
                errorMessage.style.display = 'none';
                fileNameDisplay.textContent = `${file.name}`;
                fileNameDisplay.style.display = 'block';
                previewExample.style.display = 'block';
            } else {
                fileNameDisplay.style.display = 'none'; // Sembunyikan nama file jika tidak ada file yang dipilih
            }
        });
    </script>
@endsection
