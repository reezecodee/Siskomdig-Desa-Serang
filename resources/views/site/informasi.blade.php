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
                    <li class="breadcrumb-item"><a href="#">Profile Komunitas</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Informasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Informasi</h4>
            </div>
            <div class="row g-5 justify-content-center">
                @foreach ($informations as $item)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                        <a href="{{ route('site.bacaInformasi', $item->id) }}">
                            <div class="blog-item rounded-bottom">
                                <div class="blog-img overflow-hidden position-relative">
                                    <img src="{{ $item->thumbnail ? asset('storage/images/' . $item->thumbnail) : 'https://images.unsplash.com/photo-1464297162577-f5295c892194?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                        class="img-fluid w-100" alt="Image">
                                </div>
                                <div
                                    class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                                    <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i>
                                        {{ $item->tanggal }}</small>
                                </div>
                                <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                                    <div class="overflow-hidden rounded-circle rounded border border-primary">
                                        <img src="{{ $item->foto_admin ? asset('storage/profiles/' . $item->foto_admin) : 'https://i.scdn.co/image/ab67616d00001e028f33770d5cb6b7bbbd59686a' }}"
                                            class="img-fluid rounded-circle p-2 rounded" alt="Image"
                                            style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="text-primary">{{ $item->admin }}</h6>
                                    </div>
                                </div>
                                <div class="px-4 pb-4 bg-light rounded-bottom">
                                    <div class="blog-text-inner">
                                        <a href="#" class="h4">{{ truncateText($item->judul) }}</a>
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
