@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Profile
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <form action="" method="POST" enctype="multipart/form-data" id="form-edit">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="row g-0">
                <x-admin.profile-sidebar />
                <div class="col d-flex flex-column">
                    <div class="card-body">
                        <h3 class="card-title">Detail Profile</h3>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img src="/unknown/unknown_profile.webp" class="avatar avatar-xl" srcset="" id="imagePreview">
                            </div>
                            <input type="file" style="display: none" accept=".jpg, .png, .jpeg" name="avatar"
                                id="inputImage">
                            <div class="col-auto"><a href="#" class="btn" id="btn-upload">
                                    Ganti avatar
                                </a></div>
                            <div class="col-auto"><a href="#" class="btn btn-ghost-danger">
                                    Hapus avatar
                                </a></div>
                        </div>
                        <div class="row g-3 my-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-label">Username</div>
                                    <input type="text"
                                        class="form-control @error('username')
                                         is-invalid
                                    @enderror"
                                        name="username" value="{{ old('username', auth()->user()->username) }}" placeholder="Masukkan username" required>
                                    @error('username')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-label">Nama Lengkap</div>
                                    <input type="text"
                                        class="form-control @error('nama')
                                         is-invalid
                                    @enderror"
                                        name="nama" value="{{ old('nama', auth()->user()->nama) }}" placeholder="Masukkan nama lengkap" required>
                                    @error('nama')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-label">Telepon</div>
                                    <input type="number"
                                        class="form-control @error('telepon')
                                         is-invalid
                                    @enderror"
                                        name="telepon" value="{{ old('telepon', auth()->user()->telepon) }}" placeholder="Masukkan nomor telepon" required>
                                    @error('telepon')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-label">Email</div>
                                    <input type="email"
                                        class="form-control @error('email')
                                         is-invalid
                                    @enderror"
                                        name="email" value="{{ old('email', auth()->user()->email) }}" placeholder="Masukkan email aktif" required>
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent mt-auto">
                        <div class="btn-list justify-content-end">
                            <button class="btn btn-primary" type="button" onclick="confirmAlert('form-edit')">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                                    <polyline points="16 16 12 12 8 16"></polyline>
                                    <line x1="12" y1="12" x2="12" y2="21"></line>
                                    <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                    <polyline points="16 16 12 12 8 16"></polyline>
                                </svg> Simpan profile
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
