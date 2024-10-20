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
                        <a href="{{ route('show.productUMKM') }}" class="btn btn-danger d-none d-sm-inline-block">
                            Kembali ke produk UMKM
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <form action="{{ route('update.product', $data->id) }}" method="post" enctype="multipart/form-data" id="form-edit">
        @csrf
        @method('PUT')
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-label">Foto produk</p>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ $data->foto_produk ? asset('storage/images/' . $data->foto_produk) : 'https://images.unsplash.com/photo-1727112658582-fdb2e08878d4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                class="rounded" width="200" id="imagePreview" alt="">
                            <input type="file" accept=".jpg, .png, .jpeg" name="foto_produk" id="inputImage"
                                style="display: none">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary" id="btn-upload">Upload produk</button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Kategori produk</label>
                                    <select name="kategori_id"
                                        class="form-select @error('kategori_id') is-invalid @enderror" required>
                                        @if (old('kategori_id', $data->kategori_id))
                                            <option value="{{ old('kategori_id', $data->kategori_id) }}" selected>
                                                {{ $categoryName(old('kategori_id', $data->kategori_id)) }}</option>
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
                                        @if (old('anggota_id', $data->anggota_id))
                                            <option value="{{ old('anggota_id', $data->anggota_id) }}" selected>
                                                {{ $memberName(old('anggota_id', $data->anggota_id)) }}</option>
                                        @else
                                            <option selected>--Pilih anggota pemilik--</option>
                                        @endif
                                        @foreach ($members as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
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
                                        value="{{ old('nama_produk', $data->nama_produk) }}" required>
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
                                        value="{{ old('harga', $data->harga) }}" required>
                                    @error('harga')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Deskripsi produk</label>
                                    <textarea rows="7" name="deskripsi" autocomplete="off" placeholder="Masukkan deskripsi produk"
                                        class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi', $data->deskripsi) }}</textarea>
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
                                Edit produk
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
