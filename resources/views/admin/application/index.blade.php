@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Setting
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
    <form action="{{ route('update.application') }}" method="POST" enctype="multipart/form-data" id="form-edit">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <p class="fw-bold">Upload favicon</p>
                        <div class="text-center">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ $data->favicon ? '/' . $data->favicon : 'https://www.svgrepo.com/show/532809/file-zipper.svg' }}"
                                    class="w-25 mx-auto" alt="" id="previewExample" style="display: block">
                            </div>
                            <div id="fileName" class="file-name mb-3" style="display: block">{{ $data->favicon }}</div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-center">
                                <input type="file" id="fileInput" style="display: none;" accept=".ico, .png, .jpg, .jpeg"
                                    name="favicon" value="{{ old('favicon', $data->favicon) }}">
                                <button type="button" class="btn btn-primary" id="uploadButton">Pilih favicon</button>
                            </div>
                            <div id="error-message" style="display:none; color: red;"></div>
                            @error('favicon')
                                <div style="color: red;">{{ $message }}</div>
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
                                        autocomplete="off" value="{{ old('nama_aplikasi', $data->nama_aplikasi) }}"
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
                                        autocomplete="off" value="{{ old('keyword', $data->keyword) }}"
                                        placeholder="Masukkan keyword pencarian">
                                    @error('keyword')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea id="editor" name="deskripsi" required>{{ old('deskripsi', $data->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <span class="text-danger mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 mb-2">
                                <p class="form-label">Upload logo</p>
                                <div class="text-center">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <img src="{{ $data->logo ? '/' . $data->logo : '' }}" class="mx-auto"
                                            alt="Logo" id="previewExampleLogo" style="display: block">
                                    </div>
                                    <div id="fileNameLogo" class="file-name mb-3" style="display: block">
                                        {{ $data->logo }}</div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-center">
                                        <input type="file" id="fileInputLogo" style="display: none;"
                                            accept=".png, .jpg, .jpeg" name="logo"
                                            value="{{ old('logo', $data->logo) }}">
                                        <button type="button" class="btn btn-primary" id="uploadButtonLogo">Pilih
                                            logo</button>
                                    </div>
                                    <div id="error-message-logo" style="display:none; color: red;"></div>
                                    @error('logo')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="border-2">
                        <p class="fw-bold">Informasi aplikasi</p>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Telepon</label>
                                    <input type="text" name="telepon"
                                        class="form-control @error('telepon') is-invalid
                                    @enderror"
                                        autocomplete="off" value="{{ old('telepon', $data->telepon) }}"
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
                                        autocomplete="off" value="{{ old('email', $data->email) }}"
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
                                        autocomplete="off" value="{{ old('alamat', $data->alamat) }}"
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
                                            @enderror"
                                        autocomplete="off" placeholder="Masukkan kode iframe HTML Google Maps">{{ old('google_maps', $data->google_maps) }}</textarea>
                                    @error('google_maps')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="border-2">
                        <p class="fw-bold">Kutipan motivasi</p>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Nama pembuat kutipan</label>
                                    <input type="text" name="pembuat_kutipan"
                                        class="form-control @error('pembuat_kutipan') is-invalid
                                    @enderror"
                                        autocomplete="off" value="{{ old('pembuat_kutipan', $data->pembuat_kutipan) }}"
                                        placeholder="Masukkan nama pembuat kutipan motivasi">
                                    @error('pembuat_kutipan')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Kutipan motivasi</label>
                                    <textarea rows="7" type="text" name="kutipan_motivasi"
                                        class="form-control @error('kutipan_motivasi') is-invalid
                                    @enderror"
                                        autocomplete="off" placeholder="Masukkan kutipan motivasi">{{ old('kutipan_motivasi', $data->kutipan_motivasi) }}</textarea>
                                    @error('kutipan_motivasi')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="button" onclick="confirmAlert('form-edit')"><svg
                                    class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
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

    <div class="card mt-4">
        <div class="card-body">
            <form action="{{ route('config.policy') }}" method="post" id="form-edit-policy">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $policy->id ?? '' }}">
                <div class="mb-4">
                    <h3>Syarat dan ketentuan</h3>
                    <textarea id="editor" name="syarat_ketentuan" required>{{ old('syarat_ketentuan', $policy->syarat_ketentuan) }}</textarea>
                    @error('syarat_ketentuan')
                        <span class="text-danger mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <h3>Kebijakan privasi</h3>
                    <textarea id="editor" name="kebijakan_privasi" required>{{ old('kebijakan_privasi', $policy->kebijakan_privasi) }}</textarea>
                    @error('kebijakan_privasi')
                        <span class="text-danger mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="button" onclick="confirmAlert('form-edit-policy')"><svg
                            class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg> Simpan kebijakan</button>
                </div>
            </form>
        </div>
    </div>

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
                const fileExtension = file.name.split('.').pop().toLowerCase(); // Mendapatkan ekstensi file

                if (fileExtension === 'ico') {
                    // Jika file adalah .ico, tampilkan gambar pratinjau default
                    previewExample.src =
                        'https://www.svgrepo.com/show/532809/file-zipper.svg'; // Ganti dengan path gambar default Anda
                } else if (file.type.startsWith('image/')) {
                    // Jika file adalah gambar, tampilkan pratinjau gambar yang dipilih
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewExample.src = e.target.result; // Menampilkan pratinjau gambar
                    };
                    reader.readAsDataURL(file);
                } else {
                    // Jika bukan gambar atau .ico, tampilkan error
                    errorMessage.textContent = 'Format file tidak didukung.';
                    errorMessage.style.display = 'block';
                    previewExample.style.display = 'none'; // Sembunyikan pratinjau jika format tidak didukung
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


        // Ambil elemen
        const uploadButtonLogo = document.getElementById('uploadButtonLogo');
        const fileInputLogo = document.getElementById('fileInputLogo');
        const previewExampleLogo = document.getElementById('previewExampleLogo');
        const fileNameDisplayLogo = document.getElementById('fileNameLogo');
        const errorMessageLogo = document.getElementById('error-message-logo');

        // Saat tombol upload diklik
        uploadButtonLogo.addEventListener('click', function() {
            fileInputLogo.click(); // Memicu input file untuk terbuka
        });

        // Saat file dipilih
        fileInputLogo.addEventListener('change', function(event) {
            const file = event.target.files[0]; // Ambil file yang dipilih

            if (file) {
                const fileExtension = file.name.split('.').pop().toLowerCase(); // Mendapatkan ekstensi file

                if (fileExtension === 'ico') {
                    // Jika file adalah .ico, tampilkan gambar pratinjau default
                    previewExampleLogo.src =
                        'https://www.svgrepo.com/show/532809/file-zipper.svg'; // Ganti dengan path gambar default Anda
                } else if (file.type.startsWith('image/')) {
                    // Jika file adalah gambar, tampilkan pratinjau gambar yang dipilih
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewExampleLogo.src = e.target.result; // Menampilkan pratinjau gambar
                    };
                    reader.readAsDataURL(file);
                } else {
                    // Jika bukan gambar atau .ico, tampilkan error
                    errorMessageLogo.textContent = 'Format file tidak didukung.';
                    errorMessageLogo.style.display = 'block';
                    previewExampleLogo.style.display = 'none'; // Sembunyikan pratinjau jika format tidak didukung
                    return;
                }

                // Tampilkan nama file dan sembunyikan error
                errorMessageLogo.style.display = 'none';
                fileNameDisplayLogo.textContent = `${file.name}`;
                fileNameDisplayLogo.style.display = 'block';
                previewExampleLogo.style.display = 'block';
            } else {
                fileNameDisplayLogo.style.display =
                    'none'; // Sembunyikan nama file jika tidak ada file yang dipilih
            }
        });
    </script>
@endsection
