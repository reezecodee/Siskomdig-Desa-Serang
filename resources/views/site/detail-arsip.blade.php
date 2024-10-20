@extends('layouts.site')
@section('content')
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/arsip-kegiatan.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Arsip Kegiatan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Profile Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('site.arsipKegiatan') }}">Arsip Kegiatan</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Detail Arsip</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container blog py-5 w-full">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <!-- Judul Arsip -->
                        <h5 class="mb-4 display-5">{{ $data->judul_arsip }}</h5>

                        <!-- Gambar Utama -->
                        <div class="d-flex justify-content-center">
                            <img src="{{ $data->thumbnail_arsip ? asset('storage/images/' . $data->thumbnail_arsip) : 'https://via.placeholder.com/800x400' }}"
                                class="img-fluid rounded mb-4 w-full" alt="Gambar" loading="lazy">
                        </div>

                        <!-- Konten Arsip -->
                        <article class="mb-5">
                            {!! $data->deskripsi !!}

                            <div class="d-flex justify-content-center mt-5">
                                <a href="{{ asset('storage/archives/' . $data->file_zip) }}" download>
                                    <button class="btn btn-primary rounded-pill py-3 px-4 px-md-5">Download arsip</button>
                                </a>
                            </div>
                        </article>

                        <!-- Tombol Kembali ke Daftar Arsip -->
                        <div class="mt-5">
                            <a href="{{ route('show.activityArchive') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali ke Arsip
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
