@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/produk-umkm.webp);
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">PRODUK UMKM</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Mita Komunitas</a></li>
                    <li class="breadcrumb-item active text-primary">Produk UMKM</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <h4 class="fw-bold mb-4">PRODUK UMKM DESA SERANG</h4>
                @if (!$products->isEmpty())
                    <div class="row">
                        @foreach ($products as $item)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <!-- Gambar Produk -->
                                    <img src="{{ $item->foto_produk ? asset('storage/images/'.$item->foto_produk) : 'https://via.placeholder.com/300x200' }}" class="card-img-top" alt="Product Image">
                                    <!-- Body Card -->
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                        <p class="card-text text-muted">{{ idr($item->harga) }}</p>
                                        <p class="card-text">
                                            {{ truncateText($item->deskripsi) }}
                                        </p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-primary">Hubungi penjual</a>
                                            <a href="{{ route('site.detailProdukUMKM', $item->id) }}" class="btn btn-outline-secondary">Lihat detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img src="https://www.svgrepo.com/show/87468/empty-box.svg" width="70" alt=""
                                srcset="">
                        </div>
                        <h6>Data produk UMKM tidak ditemukan</h6>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
