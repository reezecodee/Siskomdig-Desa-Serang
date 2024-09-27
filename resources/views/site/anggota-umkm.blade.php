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
                <div class="d-flex justify-content-between gap-4 align-items-center mb-4">
                    <div class="w-50 rounded border p-3">
                        <div class="d-flex gap-2 align-items-center">
                            <img src="https://newprofilepic.photo-cdn.net//assets/images/article/profile.jpg?90af0c8"
                                width="50" class="rounded-circle" alt="" srcset="">
                            <div>
                                <span class="d-block fw-bold">Jane Doe</span>
                                <span class="d-block small">Oktober 16, 2024</span>
                            </div>
                        </div>
                        <hr class="border">
                        <p>Jenis usaha: Pertanian</p>
                        <p>Pendapatan: Rp.3.000.000 - 5.000.000</p>
                        <p>Deskripsi pekerjaan: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde sed sit
                            pariatur illo aperiam, odit aspernatur voluptatem quos neque odio.</p>
                    </div>
                    <div class="w-50 rounded border p-3">
                        <div class="d-flex gap-2 align-items-center">
                            <img src="https://newprofilepic.photo-cdn.net//assets/images/article/profile.jpg?90af0c8"
                                width="50" class="rounded-circle" alt="" srcset="">
                            <div>
                                <span class="d-block fw-bold">Jane Doe</span>
                                <span class="d-block small">Oktober 16, 2024</span>
                            </div>
                        </div>
                        <hr class="border">
                        <p>Jenis usaha: Pertanian</p>
                        <p>Pendapatan: Rp.3.000.000 - 5.000.000</p>
                        <p>Deskripsi pekerjaan: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde sed sit
                            pariatur illo aperiam, odit aspernatur voluptatem quos neque odio.</p>
                    </div>
                </div>
            </div>
            <nav aria-label="...">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item active">
                        <a class="page-link" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
