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
            <h1 class="display-2 text-white mb-4">Detail Bidang Usaha</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Mitra Komunitas</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Bidang Usaha</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Detail Bidang Usaha</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Detail Bidang Usaha "{{ $data->nama_bidang_usaha }}"</h4>
            </div>
            @if (!$members->isEmpty())
                <div class="row g-3 justify-content-start">
                    @foreach ($members as $item)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item border rounded shadow-sm overflow-hidden">
                                <!-- Gambar dengan border radius -->
                                <div class="team-img d-flex justify-content-center align-items-center"
                                    style="height: 200px;">
                                    <img src="{{ $item->avatar ? asset('storage/profiles/' . $item->avatar) : '/unknown/unknown_profile.webp' }}"
                                        class="img-fluid rounded-circle" alt="{{ $item->nama }}"
                                        style="object-fit: cover; width: 150px; height: 150px;" loading="lazy">
                                </div>
                                <!-- Ikon Sosial dengan padding lebih baik -->
                                <div class="team-icon d-flex justify-content-center py-2">
                                    <a class="share-link btn btn-success btn-sm text-white rounded-circle mx-2"
                                        href="https://wa.me/{{ whatsapp($item->telepon) }}" title="Hubungi via Whatsapp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                                <!-- Konten Informasi Anggota dengan warna latar belakang -->
                                <div class="team-content text-center p-3 bg-light">
                                    <h5 class="text-dark mb-1">{{ $item->nama }}</h5>
                                </div>
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
                    <h6>Data anggota bidang usaha ini tidak ditemukan.</h6>
                </div>
            @endif
            <div class="d-flex justify-content-end mt-5">
                {{ $members->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
