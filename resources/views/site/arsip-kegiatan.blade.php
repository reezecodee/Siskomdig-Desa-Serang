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
                    <li class="breadcrumb-item text-white" aria-current="page">Arsip Kegiatan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Arsip Kegiatan</h4>
            </div>
            <div>
                <div class="text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.3s" style="max-width: 1100px;">
                    @forelse ($archives as $item)
                        <div class="row mb-4">
                            <div class="col-12 col-sm-4 mb-3 mb-sm-0">
                                <img src="{{ $item->thumbnail_arsip ? asset('storage/images/' . $item->thumbnail_arsip) : 'https://via.placeholder.com/2070x1380' }}"
                                    class="img-fluid rounded" alt="" loading="lazy"/>
                            </div>
                            <div class="col-12 col-sm-8">
                                <a href="{{ route('site.detailArsipKegiatan', $item->id) }}">
                                    <h4 class="fw-bold">{{ truncateText($item->judul_arsip, 70) }}</h4>
                                    <p class="fw-light d-none d-sm-block">{{ truncateText($item->deskripsi, 110) }}</p>
                                </a>
                                <a href="{{ asset('storage/archives/' . $item->file_zip) }}" download>
                                    <button class="btn btn-primary mt-2 mt-sm-0">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            width="23" height="23">
                                            <path
                                                d="M17 17H17.01M17.4 14H18C18.9319 14 19.3978 14 19.7654 14.1522C20.2554 14.3552 20.6448 14.7446 20.8478 15.2346C21 15.6022 21 16.0681 21 17C21 17.9319 21 18.3978 20.8478 18.7654C20.6448 19.2554 20.2554 19.6448 19.7654 19.8478C19.3978 20 18.9319 20 18 20H6C5.06812 20 4.60218 20 4.23463 19.8478C3.74458 19.6448 3.35523 19.2554 3.15224 18.7654C3 18.3978 3 17.9319 3 17C3 16.0681 3 15.6022 3.15224 15.2346C3.35523 14.7446 3.74458 14.3552 4.23463 14.1522C4.60218 14 5.06812 14 6 14H6.6M12 15V4M12 15L9 12M12 15L15 12"
                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Download arsip
                                    </button>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <img src="https://www.svgrepo.com/show/87468/empty-box.svg" width="70" alt=""
                                    srcset="">
                            </div>
                            <h6>Data arsip kegiatan tidak ditemukan</h6>
                        </div>
                    @endforelse
                </div>
                <div class="d-flex justify-content-end">
                    {{ $archives->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
