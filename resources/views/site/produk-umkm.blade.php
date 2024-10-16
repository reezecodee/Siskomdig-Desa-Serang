@extends('layouts.site')
@section('content')
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/produk-umkm.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Produk UMKM</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Profile Komunitas</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Produk UMKM</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Produk UMKM</h4>
            </div>
            <div class="row g-5 justify-content-center">
                @foreach ($products as $item)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                        <a href="{{ route('site.detailProdukUMKM', $item->id) }}">
                            <div class="events-item">
                                <div class="events-inner position-relative">
                                    <div class="overflow-hidden position-relative">
                                        <img src="{{ $item->foto_produk ? asset('storage/images/' . $item->foto_produk) : 'https://images.unsplash.com/photo-1464297162577-f5295c892194?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                            class="img-fluid" alt="Image" loading="lazy">
                                    </div>
                                    <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                        <small class="text-white">{{ idr($item->harga) }}</small>
                                        <small class="text-white">{{ $item->kategori }}</small>
                                    </div>
                                </div>
                                <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                                    <a href="#" class="h4">{{ truncateText($item->nama_produk, 30) }}</a>
                                    <p class="mb-0 mt-3">{{ truncateText($item->deskripsi) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
