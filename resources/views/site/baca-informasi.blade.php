@extends('layouts.site')
@section('content')
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/informasi.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Informasi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Profile Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('site.informasi') }}">Informasi</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Baca</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0 p-sm-5">
                        <!-- Gambar Artikel -->
                        <div class="d-flex justify-content-center">
                            <img src="{{ $data->thumbnail ? asset('storage/images/' . $data->thumbnail) : 'https://via.placeholder.com/800x400' }}"
                                class="img-fluid w-full rounded mb-4" alt="Gambar Artikel">
                        </div>

                        <!-- Judul Artikel -->
                        <h2 class="card-title mb-3 fw-bold">{{ $data->judul }}</h2>

                        <!-- Info Penulis dan Tanggal -->
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Ditulis oleh <strong>{{ $data->users->nama }}</strong></span>
                            <span class="text-muted">{{ $data->created_at->format('d M Y') }}</span>
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
                                <i class="fas fa-arrow-left"></i> Kembali ke Informasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
