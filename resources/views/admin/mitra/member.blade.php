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
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-member">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah Anggota
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
            <table id="user-table" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis usaha</th>
                        <th>Pendapatan</th>
                        <th>Pendapatan tertinggi</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-member" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah anggota UMKM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" enctype="multipart/form-data" method="post" id="form-store">
                        @csrf
                        <div class="text-center mb-3">
                            <div class="d-flex justify-content-center mx-auto mb-3">
                                <img src="https://avatars.githubusercontent.com/u/159593076?v=4" class="rounded-circle"
                                    width="150" id="imagePreview" alt="">
                                <input type="file" id="inputImage" style="display: none" accept=".png, .jpg, .jpeg"
                                    name="avatar">
                            </div>
                            <button class="btn btn-primary mb-1" id="btn-upload">Upload avatar</button>
                            @error('avatar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Nama pelaku UMKM</label>
                                    <input type="text" name="nama" autocomplete="off"
                                        placeholder="Masukkan nama pelaku UMKM"
                                        class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                                    @error('nama')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Usia</label>
                                    <input type="number" name="usia" autocomplete="off"
                                        placeholder="Masukkan usia pelaku UMKM"
                                        class="form-control @error('usia') is-invalid @enderror" value="{{ old('usia') }}" required>
                                    @error('usia')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Pendapatan</label>
                                    <input type="number" name="pendapatan" autocomplete="off"
                                        placeholder="Masukkan pendapatan"
                                        class="form-control @error('pendapatan') is-invalid @enderror" value="{{ old('pendapatan') }}" required>
                                    @error('pendapatan')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Pendapatan tertinggi</label>
                                    <input type="number" name="pendapatan_tertinggi" autocomplete="off"
                                        placeholder="Masukkan pendapatan tertinggi"
                                        class="form-control @error('pendapatan_tertinggi') is-invalid @enderror" value="{{ old('pendapatan_tertinggi') }}"  required>
                                    @error('pendapatan_tertinggi')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Jenis usaha</label>
                                    <input type="text" name="jenis_usaha" autocomplete="off"
                                        placeholder="Masukkan jenis usaha anggota"
                                        class="form-control @error('jenis_usaha') is-invalid @enderror" value="{{ old('jenis_usaha') }}"  required>
                                    @error('jenis_usaha')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Deskripsi pekerjaan</label>
                                    <textarea rows="7" name="deskripsi" autocomplete="off" placeholder="Masukkan deskripsi pekerjaan"
                                        class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Batalkan
                    </a>
                    <a href="#" onclick="confirmAlert('form-store')" class="btn btn-primary ms-auto">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg>
                        Tambahkan anggota
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#user-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('api.members') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'jenis_usaha',
                        name: 'jenis_usaha'
                    },
                    {
                        data: 'pendapatan',
                        name: 'pendapatan'
                    },
                    {
                        data: 'pendapatan_tertinggi',
                        name: 'pendapatan_tertinggi'
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
