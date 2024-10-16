@extends('layouts.site')
@section('content')
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/struktur-organisasi.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Struktur Organisasi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Profile Komunitas</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Struktur Organisasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Struktur Organisasi</h4>
            </div>
            <div class="w-full wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid" src="{{ $image ? asset('storage/images/' . $image) : 'https://media.kemenkeu.go.id/getmedia/3b77dba3-2f5e-4d82-8798-a37f578c8dfe/struktur-organisasi.jpg?width=1920&height=1396&ext=.jpg' }}"
                        alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
@endsection
