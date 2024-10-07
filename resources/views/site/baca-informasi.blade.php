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
                    <li class="breadcrumb-item"><a href="">Profile Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="">Informasi</a></li>
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
                            <img src="{{ $data->thumbnail ? asset('storage/images/' . $data->thumbnail) : 'https://via.placeholder.com/800x400' }}" class="img-fluid w-full rounded mb-4"
                                alt="Gambar Artikel">
                        </div>

                        <!-- Judul Artikel -->
                        <h2 class="card-title mb-3">{{ $data->judul }}</h2>

                        <!-- Info Penulis dan Tanggal -->
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Ditulis oleh <strong>{{ $data->users->nama }}</strong></span>
                            <span class="text-muted">{{ $data->created_at->diffForHumans() }}</span>
                        </div>

                        <!-- Garis Pembatas -->
                        <hr>

                        <!-- Isi Artikel -->
                        <article class="mt-4">
                            {!! $data->konten_informasi !!}
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
