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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Detail Anggota UMKM</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Mita Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Anggota UMKM</a></li>
                    <li class="breadcrumb-item active text-primary">Detail</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <!-- User Detail Card -->
                <div class="card shadow p-4">
                    <div class="row g-4">
                        <!-- Foto Profil -->
                        <div class="col-md-4 text-center">
                            <img src="https://via.placeholder.com/150" alt="Foto Profil"
                                class="img-fluid rounded-circle mb-3">
                        </div>
                        <!-- Detail Informasi Pengguna -->
                        <div class="col-md-8">
                            <h2 class="mb-2">Nama Pengguna</h2>
                            <p class="text-muted">Email: user@example.com</p>
                            <p class="text-muted">Pekerjaan: Software Developer</p>

                            <!-- Deskripsi Singkat -->
                            <p class="mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor lacus non lorem
                                vehicula
                                fringilla. Suspendisse potenti. Mauris eget venenatis justo. Integer mollis nunc ut tortor
                                fermentum,
                                at malesuada dui tempus.
                            </p>

                            <div class="mt-3">
                                <a href="">
                                    <button class="btn btn-primary">Hubungi anggota</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-4 mt-3">
                    <h4 class="fw-bold mb-4">Produk yang dijual</h4>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <!-- Gambar Produk -->
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                                <!-- Body Card -->
                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text text-muted">Rp. 150,000</p>
                                    <p class="card-text">
                                        Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang
                                        fitur produk di sini.
                                    </p>
                                    <div class="d-grid gap-2">
                                        <a href="#" class="btn btn-outline-secondary">Lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <!-- Gambar Produk -->
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                                <!-- Body Card -->
                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text text-muted">Rp. 150,000</p>
                                    <p class="card-text">
                                        Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang
                                        fitur produk di sini.
                                    </p>
                                    <div class="d-grid gap-2">
                                        <a href="#" class="btn btn-outline-secondary">Lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <!-- Gambar Produk -->
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                                <!-- Body Card -->
                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text text-muted">Rp. 150,000</p>
                                    <p class="card-text">
                                        Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang
                                        fitur produk di sini.
                                    </p>
                                    <div class="d-grid gap-2">
                                        <a href="#" class="btn btn-outline-secondary">Lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <!-- Gambar Produk -->
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                                <!-- Body Card -->
                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text text-muted">Rp. 150,000</p>
                                    <p class="card-text">
                                        Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang
                                        fitur produk di sini.
                                    </p>
                                    <div class="d-grid gap-2">
                                        <a href="#" class="btn btn-outline-secondary">Lihat detail</a>
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
