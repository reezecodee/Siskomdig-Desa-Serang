@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/produk-umkm.webp);
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">PRODUK UMKM</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Mita Komunitas</a></li>
                    <li class="breadcrumb-item active text-primary">Produk UMKM</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <h4 class="fw-bold mb-4">PRODUK UMKM DESA SERANG</h4>
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
                                    Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang fitur produk di sini.
                                </p>
                                <!-- Tombol Beli dan Tambah ke Keranjang -->
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary">Hubungi penjual</a>
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
                                    Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang fitur produk di sini.
                                </p>
                                <!-- Tombol Beli dan Tambah ke Keranjang -->
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary">Hubungi penjual</a>
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
                                    Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang fitur produk di sini.
                                </p>
                                <!-- Tombol Beli dan Tambah ke Keranjang -->
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary">Hubungi penjual</a>
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
                                    Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang fitur produk di sini.
                                </p>
                                <!-- Tombol Beli dan Tambah ke Keranjang -->
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary">Hubungi penjual</a>
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
                                    Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang fitur produk di sini.
                                </p>
                                <!-- Tombol Beli dan Tambah ke Keranjang -->
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary">Hubungi penjual</a>
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
                                    Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang fitur produk di sini.
                                </p>
                                <!-- Tombol Beli dan Tambah ke Keranjang -->
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary">Hubungi penjual</a>
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
                                    Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang fitur produk di sini.
                                </p>
                                <!-- Tombol Beli dan Tambah ke Keranjang -->
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary">Hubungi penjual</a>
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
                                    Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang fitur produk di sini.
                                </p>
                                <!-- Tombol Beli dan Tambah ke Keranjang -->
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary">Hubungi penjual</a>
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
                                    Ini adalah deskripsi singkat produk. Anda bisa memberikan informasi singkat tentang fitur produk di sini.
                                </p>
                                <!-- Tombol Beli dan Tambah ke Keranjang -->
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary">Hubungi penjual</a>
                                    <a href="#" class="btn btn-outline-secondary">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
