@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-information">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Buat informasi
                        </a>
                        <a href="{{ route('show.allInformation') }}" class="btn btn-danger d-none d-sm-inline-block">
                            Kembali ke semua informasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <table id="information-table" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Ditambahkan pada</th>
                        <th>Visibilitas</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-information" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buat Informasi Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.information') }}" enctype="multipart/form-data" method="post"
                        id="form-store">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group">
                                <label class="form-label">Gambar</label>
                                <div class="d-flex justify-content-center">
                                    <img src="" class="my-2" style="display: none" id="previewImage"
                                        alt="" srcset="">
                                </div>
                                <input type="file"
                                    class="form-control @error('gambar') is-invalid
                            @enderror"
                                    accept=".jpg, .png, .jpeg" name="gambar" id="inputImage">
                                @error('gambar')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label class="form-label">Judul informasi</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    name="judul" placeholder="Masukkan judul informasi" value="{{ old('judul') }}"
                                    autocomplete="off" required>
                                @error('judul')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label class="form-label">Konten informasi</label>
                                <textarea id="editor" name="konten_informasi" required>{{ old('konten_informasi') }}</textarea>
                                @error('konten_informasi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <label class="form-label">Visibilitas</label>
                        <div class="form-selectgroup-boxes row mb-3">
                            <div class="col-lg-6">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="visibilitas" value="Publik" class="form-selectgroup-input"
                                        checked>
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
                                    <input type="radio" name="visibilitas" value="Privasi"
                                        class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Privasi</span>
                                            <span class="d-block text-muted">Informasi yang kamu buat hanya dapat di lihat
                                                oleh
                                                Anda seorang.</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            @error('visibilitas')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Batalkan
                    </a>
                    <button type="button" onclick="confirmAlert('form-store')" class="btn btn-primary"><svg
                            class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg> Buat informasi baru</button>
                </div>
            </div>
        </div>
    </div>
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

        $(document).ready(function() {
            $('#information-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('api.myInformations') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'judul',
                        name: 'judul'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'visibilitas',
                        name: 'visibilitas'
                    },
                    {
                        data: 'action', // Pastikan ini benar
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endsection
