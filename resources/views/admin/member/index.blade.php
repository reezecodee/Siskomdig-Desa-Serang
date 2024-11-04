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
                        <th>Bidang usaha</th>
                        <th>NIB/SKU</th>
                        <th>Telepon</th>
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
                    <h5 class="modal-title">Tambah anggota komunitas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.member') }}" enctype="multipart/form-data" method="post" id="form-store">
                        @csrf
                        <div class="text-center mb-3">
                            <div class="d-flex justify-content-center mx-auto mb-3">
                                <img src="/unknown/unknown_profile.webp" class="rounded-circle" width="150"
                                    height="150" id="imagePreview" alt="">
                                <input type="file" id="inputImage" style="display: none" accept=".png, .jpg, .jpeg"
                                    name="avatar">
                            </div>
                            <button class="btn btn-primary mb-1" type="button" id="btn-upload">Upload avatar</button>
                            @error('avatar')
                                <span class="text-danger d-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Nama anggota</label>
                                    <input type="text" name="nama" autocomplete="off"
                                        placeholder="Masukkan nama anggota"
                                        class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}"
                                        required>
                                    @error('nama')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Telepon (WhatsApp/HP/Telp)</label>
                                    <input type="number" name="telepon" autocomplete="off"
                                        placeholder="Masukkan nomor telepon"
                                        class="form-control @error('telepon') is-invalid @enderror"
                                        value="{{ old('telepon') }}" required>
                                    @error('telepon')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Kampung</label>
                                    <input type="text" name="kampung" autocomplete="off"
                                        placeholder="Masukkan kampung anggota"
                                        class="form-control @error('kampung') is-invalid @enderror"
                                        value="{{ old('kampung') }}" required>
                                    @error('kampung')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Rukun tetangga (RT)</label>
                                    <input type="number" name="rt" autocomplete="off"
                                        placeholder="Masukkan RT anggota"
                                        class="form-control @error('rt') is-invalid @enderror" value="{{ old('rt') }}"
                                        required>
                                    @error('rt')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Rukun warga (RW)</label>
                                    <input type="number" name="rw" autocomplete="off"
                                        placeholder="Masukkan RW anggota"
                                        class="form-control @error('rw') is-invalid @enderror"
                                        value="{{ old('rw') }}" required>
                                    @error('rw')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Bidang usaha</label>
                                    <select name="business_id"
                                        class="form-select @error('business_id') is-invalid @enderror" id="">
                                        <option selected disabled>Pilih bidang usaha</option>
                                        @foreach ($businessFields as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('business_id') == $item->id ? 'selected' : '' }}>
                                                {{ $item->nama_bidang_usaha }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('business_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">NIB/SKU</label>
                                    <input type="text" name="nib_sku" autocomplete="off"
                                        placeholder="Masukkan NIB/SKU anggota"
                                        class="form-control @error('nib_sku') is-invalid @enderror"
                                        value="{{ old('nib_sku') }}" required>
                                    @error('nib_sku')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Status keanggotaan</label>
                                    <select name="status" class="form-select @error('status') is-invalid @enderror"
                                        id="">
                                        <option selected disabled>Pilih status</option>
                                        <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif
                                        </option>
                                        <option value="Tidak aktif"
                                            {{ old('status') == 'Tidak aktif' ? 'selected' : '' }}>Tidak aktif</option>
                                    </select>
                                    @error('status')
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
                        data: 'bidang_usaha',
                        name: 'bidang_usaha'
                    },
                    {
                        data: 'nib_sku',
                        name: 'nib_sku'
                    },
                    {
                        data: 'telepon',
                        name: 'telepon'
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
