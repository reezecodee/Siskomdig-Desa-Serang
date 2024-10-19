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
                        <div class="card">
                            <!-- Gambar Produk -->
                            <img src="{{ $item->foto_produk ? asset('storage/images/' . $item->foto_produk) : 'https://via.placeholder.com/300x200' }}"
                                class="card-img-top" alt="Product Image">
                            <!-- Body Card -->
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                <p class="card-text text-muted">{{ idr($item->harga) }}</p>
                                <p class="card-text">
                                    {{ truncateText($item->deskripsi) }}
                                </p>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('site.detailProdukUMKM', $item->id) }}"
                                        class="btn btn-outline-secondary">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
