@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/informasi.webp);
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Baca Informasi</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Profile Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Informasi</a></li>
                    <li class="breadcrumb-item active text-primary">Baca</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <!-- Gambar Artikel -->
                        <div class="d-flex justify-content-center">
                            <img src="https://via.placeholder.com/900x500" class="img-fluid w-full rounded mb-4"
                                alt="Gambar Artikel">
                        </div>

                        <!-- Judul Artikel -->
                        <h2 class="card-title mb-3">Judul Artikel yang Sangat Menarik</h2>

                        <!-- Info Penulis dan Tanggal -->
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Ditulis oleh <strong>Penulis Artikel</strong></span>
                            <span class="text-muted">1 Oktober 2024</span>
                        </div>

                        <!-- Garis Pembatas -->
                        <hr>

                        <!-- Isi Artikel -->
                        <article class="mt-4">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis erat ut erat maximus
                                euismod non ac mauris.
                                Curabitur ullamcorper sollicitudin risus, et tincidunt purus feugiat in. Nulla convallis
                                justo nec est tincidunt faucibus.
                                Nam quis ex vestibulum, bibendum libero ac, ultricies nunc.
                            </p>
                            <p>
                                Donec eget urna ut lectus vestibulum rutrum. Suspendisse finibus ex sit amet ipsum
                                tincidunt, non lacinia sapien
                                efficitur. Integer eu magna ut lacus tincidunt congue. Fusce vel neque varius, pellentesque
                                eros ut, luctus leo.
                                Morbi efficitur viverra erat ac lacinia.
                            </p>
                            <p>
                                Aliquam erat volutpat. Nam volutpat luctus libero, sed maximus enim consequat ac. Nam
                                dignissim mi libero,
                                id ultricies nisi condimentum ut. Nullam cursus magna ut elit tincidunt, a facilisis justo
                                vehicula. Curabitur
                                tempus orci turpis, a fermentum massa tempor quis.
                            </p>
                        </article>

                        <!-- Garis Pembatas -->
                        <hr>

                        <!-- Tombol Kembali -->
                        <div class="mt-4">
                            <a href="{{ route('site.informasi') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
