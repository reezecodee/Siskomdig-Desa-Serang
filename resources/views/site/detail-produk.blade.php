@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/anggota-umkm.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 140px 0 60px 0;
            transition: 0.5s;
        }
    </style>
    <div class="container-fluid position-relative p-0">
        <x-site.navbar />
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Detail Produk UMKM</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Mita Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Produk UMKM</a></li>
                    <li class="breadcrumb-item active text-primary">Detail</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <!-- Product Detail Card -->
                <div class="card shadow p-4">
                    <div class="row g-4">
                        <!-- Gambar Produk -->
                        <div class="col-md-6 text-center">
                            <img src="https://via.placeholder.com/400x400" alt="Gambar Produk"
                                class="img-fluid rounded mb-3">
                        </div>
                        <!-- Detail Informasi Produk -->
                        <div class="col-md-6">
                            <h2 class="mb-2">Nama Produk</h2>
                            <p class="text-muted">Kategori: Elektronik</p>
                            <h4 class="text-danger mb-3">Rp 1.500.000</h4>

                            <!-- Deskripsi Produk -->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor lacus non lorem
                                vehicula
                                fringilla. Suspendisse potenti. Mauris eget venenatis justo. Integer mollis nunc ut tortor
                                fermentum,
                                at malesuada dui tempus.
                            </p>

                            <!-- Tombol Tindakan -->
                            <div class="mt-4 d-flex gap-2">
                                <button class="btn btn-primary flex-fill">Hubungi penjual</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Detail Card -->
                <div class="card shadow p-4 mt-3">
                    <div class="row g-4 align-items-center">
                        <!-- Foto Profil -->
                        <div class="col-md-4 text-center">
                            <img src="https://via.placeholder.com/150" alt="Foto Profil"
                                class="img-fluid rounded-circle mb-3">
                        </div>
                        <!-- Detail Informasi Pengguna -->
                        <div class="col-md-8">
                            <h2 class="mb-2">Nama Pengguna</h2>
                            <div class="row gap-3">
                                <div class="col-md-4">
                                    <p class="text-muted">Email: user@example.com</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-muted">Telepon: +62 81231231231</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
