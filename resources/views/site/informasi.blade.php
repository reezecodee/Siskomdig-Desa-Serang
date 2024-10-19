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
                    <li class="breadcrumb-item text-white" aria-current="page">Informasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Informasi</h4>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($informations as $item)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="{{ route('site.bacaInformasi', $item->id) }}" class="text-decoration-none">
                            <div class="blog-item rounded shadow-sm overflow-hidden bg-white">
                                <!-- Gambar Artikel -->
                                <div class="blog-img position-relative overflow-hidden">
                                    <img src="{{ $item->thumbnail ? asset('storage/images/' . $item->thumbnail) : 'https://images.unsplash.com/photo-1464297162577-f5295c892194?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                        class="img-fluid w-100" alt="Image" style="object-fit: cover; height: 200px;">
                                </div>

                                <!-- Tanggal dan Komentar -->
                                <div class="d-flex justify-content-between px-4 py-2 border-bottom border-primary">
                                    <small class="text-muted"><i
                                            class="fas fa-calendar-alt me-1"></i>{{ $item->tanggal }}</small>
                                </div>

                                <!-- Konten Blog -->
                                <div class="px-4 py-3">
                                    <div class="blog-text-inner mb-2">
                                        <h6 class="text-dark">{{ truncateText($item->judul) }}</h6>
                                    </div>

                                    <!-- Informasi Admin -->
                                    <div class="d-flex align-items-center">
                                        <div class="overflow-hidden rounded-circle border border-primary">
                                            <img src="{{ $item->foto_admin ? asset('storage/profiles/' . $item->foto_admin) : 'https://i.scdn.co/image/ab67616d00001e028f33770d5cb6b7bbbd59686a' }}"
                                                class="img-fluid rounded-circle p-1" alt="Admin Image"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0 text-primary">{{ $item->admin }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
