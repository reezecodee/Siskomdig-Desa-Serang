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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">ANGGOTA UMKM</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Mita Komunitas</a></li>
                    <li class="breadcrumb-item active text-primary">Anggota UMKM</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <h4 class="fw-bold mb-4">ANGGOTA UMKM TERDAFTAR</h4>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center">
                            <!-- Foto Member (Rounded Circle) -->
                            <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto mt-3 w-50 img-fluid" alt="Foto Member UMKM">
                            <div class="card-body">
                                <!-- Nama dan Pekerjaan -->
                                <h5 class="card-title">Nama Member 1</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Pekerjaan: Pengusaha Kecil</h6>
                                <!-- Deskripsi Singkat -->
                                <p class="card-text">
                                    Deskripsi singkat tentang member dan UMKM yang mereka jalankan. Informasi ini akan membantu orang lain untuk lebih mengenal usaha yang dikelola.
                                </p>
                                <!-- Tombol Lihat Detail -->
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
