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
                    <li class="breadcrumb-item text-white" aria-current="page">Anggota UMKM</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Anggota UMKM</h4>
            </div>
            <div class="d-flex justify-content-end align-items-center w-full mb-3">
                <form action="" method="GET" class="d-flex gap-2 mb-3">
                    @csrf
                    <input type="search" class="form-control" value="" name="s" id=""
                        placeholder="Cari anggota" autocomplete="off">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
            @if (!$members->isEmpty())
                <div class="row g-3 justify-content-center">
                    @foreach ($members as $item)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="team-item border rounded shadow-sm overflow-hidden">
                                <!-- Gambar dengan border radius -->
                                <div class="team-img d-flex justify-content-center align-items-center"
                                    style="height: 200px;">
                                    <a href="{{ route('site.detailAnggotaUMKM', $item->id) }}">
                                        <img src="{{ $item->avatar ? asset('storage/profiles/' . $item->avatar) : 'https:via.placeholder.com/150x150' }}"
                                            class="img-fluid rounded-circle" alt="{{ $item->nama }}"
                                            style="object-fit: cover; width: 150px; height: 150px;" loading="lazy">
                                    </a>
                                </div>
                                <!-- Ikon Sosial dengan padding lebih baik -->
                                <div class="team-icon d-flex justify-content-center py-2">
                                    <a class="share btn btn-primary btn-sm text-white rounded-circle mx-2" href="#"
                                        title="Hubungi via email">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                    <a class="share-link btn btn-success btn-sm text-white rounded-circle mx-2"
                                        href="#" title="Hubungi via Whatsapp">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                                <!-- Konten Informasi Anggota dengan warna latar belakang -->
                                <a href="{{ route('site.detailAnggotaUMKM', $item->id) }}">
                                    <div class="team-content text-center p-3 bg-light">
                                        <h5 class="text-dark mb-1">{{ $item->nama }}</h5>
                                        <p class="text-muted small mb-0">{{ $item->jenis_usaha }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex justify-content-center">
                        <img src="https://www.svgrepo.com/show/87468/empty-box.svg" width="70" alt=""
                            srcset="">
                    </div>
                    <h6>Data anggota UMKM tidak ditemukan</h6>
                </div>
            @endif
            <div class="d-flex justify-content-end">
                {{ $members->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
