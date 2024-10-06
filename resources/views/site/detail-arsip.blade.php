@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/arsip-kegiatan.webp);
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Detail Arsip</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Profile Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Arsip Kegiatan</a></li>
                    <li class="breadcrumb-item active text-primary">Detail</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- Judul Artikel -->
                        <h1 class="mb-3">Judul Arsip Menarik</h1>

                        <!-- Gambar Utama -->
                        <img src="https://via.placeholder.com/800x400" class="img-fluid rounded mb-4" alt="Gambar Artikel">

                        <!-- Konten Artikel -->
                        <article>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet lacus a mauris
                                malesuada malesuada.
                                Sed et magna a arcu vehicula malesuada. Etiam in justo in sapien auctor tincidunt.
                                Proin non ultricies risus, in mollis arcu. Nam in sollicitudin justo. Sed dapibus ante vel
                                lectus faucibus, id fermentum augue iaculis.
                            </p>
                            <p>
                                Donec tincidunt nisi a tortor ornare, vel vehicula ipsum vehicula. Nam venenatis interdum
                                neque eget consequat.
                                Quisque volutpat, arcu ac pellentesque dapibus, est urna hendrerit orci, at cursus erat
                                ligula sit amet nibh.
                                Nam dictum, tortor nec rutrum feugiat, magna eros viverra purus, ac scelerisque ex dolor at
                                risus.
                                Morbi facilisis odio neque, eget bibendum ligula gravida in.
                            </p>
                            <p>
                                Aenean non risus in turpis luctus tempor. In ac sollicitudin velit. Donec sit amet leo at
                                nisi iaculis lacinia.
                                Suspendisse sed lorem nec libero sollicitudin tempus. Suspendisse dapibus ligula ut sem
                                gravida, vel tempus erat fermentum.
                                Ut nec ex sed risus vehicula luctus vel ut lacus. Sed porta dapibus turpis, vitae vehicula
                                ligula luctus nec.
                            </p>

                            <div class="d-flex justify-content-center">
                                <a href="" download>
                                    <button class="btn btn-primary rounded-pill py-3 px-4 px-md-5">Download arsip</button>
                                </a>
                            </div>
                        </article>

                        <!-- Tombol Kembali ke Daftar Artikel -->
                        <div class="mt-5">
                            <a href="{{ route('show.activityArchive') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
