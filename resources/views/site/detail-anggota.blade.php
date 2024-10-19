@extends('layouts.site')
@section('content')
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/anggota-umkm.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Anggota UMKM</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Mitra Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('site.anggotaUMKM') }}">Anggota UMKM</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Detail Anggota</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <!-- User Detail Card -->
                <div class="card shadow p-4">
                    <div class="row g-4">
                        <!-- Foto Profil -->
                        <div class="col-md-4 text-center">
                            <img src="https://via.placeholder.com/150" alt="Foto Profil"
                                class="img-fluid rounded-circle mb-3">
                        </div>
                        <!-- Detail Informasi Pengguna -->
                        <div class="col-md-8">
                            <h2 class="mb-2 display-6">{{ $data->nama }}</h2>

                            <span class="d-block"><span class="text-dark fw-bold d-block d-sm-inline">Pendapatan:</span> Rp.200.000 -
                                Rp.300.000</span>
                            <span class="d-block"><span class="text-dark fw-bold d-block d-sm-inline">Pekerjaan:</span> Kuli bangunan</span>

                            <!-- Deskripsi Singkat -->
                            <p class="mt-3" style="text-align: justify">
                                {{ $data->deskripsi }}
                            </p>

                            <div class="mt-3">
                                <a href="" class="d-block d-sm-inline mb-2 mb-sm-0">
                                    <button class="btn btn-primary"><i class="fab fa-whatsapp"></i> Hubungi
                                        WhatsApp</button>
                                </a>
                                <a href="">
                                    <button class="btn btn-primary"><i class="fas fa-envelope"></i> Hubungi Email</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-4 mt-3">
                    <h4 class="fw-bold mb-4">Produk yang dijual</h4>
                    @if (!$products->isEmpty())
                        <div class="row">
                            @foreach ($products as $item)
                                <div class="col-md-4 mb-3">
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
                    @else
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <img src="https://www.svgrepo.com/show/87468/empty-box.svg" width="70" alt=""
                                    srcset="">
                            </div>
                            <h6>Data produk milik anggota UMKM tidak ditemukan</h6>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
