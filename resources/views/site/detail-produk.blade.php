@extends('layouts.site')
@section('content')
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/produk-umkm.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Produk UMKM</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Profile Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="#">Produk UMKM</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Produk UMKM</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <!-- Product Detail Card -->
                <div class="card shadow p-4">
                    <div class="row g-4">
                        <!-- Gambar Produk -->
                        <div class="col-md-6 text-center">
                            <img src="{{ $data->foto_produk ? asset('storage/images/' . $data->foto_produk) : 'https://via.placeholder.com/300x200' }}"
                                alt="Gambar Produk" class="img-fluid rounded mb-3">
                        </div>
                        <!-- Detail Informasi Produk -->
                        <div class="col-md-6">
                            <h2 class="mb-2">{{ $data->nama_produk }}</h2>
                            <p class="text-muted">Kategori: {{ $data->kategori }}</p>
                            <h4 class="text-danger mb-3">{{ idr($data->harga) }}</h4>

                            <!-- Deskripsi Produk -->
                            {{ $data->deskripsi }}

                            <!-- Tombol Tindakan -->
                            <div class="mt-4 d-flex gap-2">
                                <a href="">
                                    <button class="btn btn-primary flex-fill">Hubungi penjual</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
