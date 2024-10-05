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
                            data-bs-target="#modal-product">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah produk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<x-admin.alert.success :success="session('success')" />
    <div class="card">
        <div class="card-body">
            <table id="products-table" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Pemilik</th>
                        <th>Nama produk</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-product" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah produk UMKM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data"
                        id="form-store">
                        @csrf
                        <div class="text-center mb-3">
                            <div class="d-flex justify-content-center mx-auto mb-3">
                                <img src="/unknown/unknown_product_preview.png"
                                    class="rounded" width="200" id="imagePreview" alt="">
                                <input type="file" id="inputImage" style="display: none" accept=".png, .jpg, .jpeg"
                                    name="foto_produk">
                            </div>
                            <button type="button" class="btn btn-primary mb-1" id="btn-upload">Upload foto produk</button>
                            @error('foto_produk')
                                <span class="text-danger d-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Kategori produk</label>
                                    <select name="kategori_id"
                                        class="form-select @error('kategori_id') is-invalid @enderror" required>
                                        @if (old('kategori_id'))
                                            <option value="{{ old('kategori_id') }}" selected>
                                                {{ $categoryName(old('kategori_id')) }}</option>
                                        @else
                                            <option selected>--Pilih kategori--</option>
                                        @endif
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Pemilik produk</label>
                                    <select name="anggota_id" class="form-select @error('anggota_id') is-invalid @enderror"
                                        required>
                                        @if (old('anggota_id'))
                                            <option value="{{ old('anggota_id') }}" selected>
                                                {{ $memberName(old('anggota_id')) }}</option>
                                        @else
                                            <option selected>--Pilih anggota pemilik--</option>
                                        @endif
                                        @foreach ($members as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('anggota_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Nama produk</label>
                                    <input type="text" name="nama_produk" autocomplete="off"
                                        placeholder="Masukkan nama produk"
                                        class="form-control @error('nama_produk') is-invalid @enderror"
                                        value="{{ old('nama_produk') }}" required>
                                    @error('nama_produk')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Harga</label>
                                    <input type="number" name="harga" autocomplete="off"
                                        placeholder="Masukkan harga produk"
                                        class="form-control @error('harga') is-invalid @enderror"
                                        value="{{ old('harga') }}" required>
                                    @error('harga')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Deskripsi produk</label>
                                    <textarea rows="7" name="deskripsi" autocomplete="off" placeholder="Masukkan deskripsi produk"
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
                    <a href="#" class="btn btn-primary ms-auto" onclick="confirmAlert('form-store')">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg>
                        Tambahkan produk
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#products-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('api.products') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'category_name',
                        name: 'category_name'
                    },
                    {
                        data: 'member_name',
                        name: 'member_name'
                    },
                    {
                        data: 'nama_produk',
                        name: 'nama_produk'
                    },
                    {
                        data: 'harga',
                        name: 'harga'
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
