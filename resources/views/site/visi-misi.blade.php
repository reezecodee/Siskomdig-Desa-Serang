@extends('layouts.site')
@section('content')
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/visi-misi.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Visi & Misi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Profile Komunitas</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Visi & Misi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Visi Komunitas</h4>
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.3s">
                <p class="text-center">{!! $visi !!}</p>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.5s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Misi Komunitas</h4>
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.7s">
                <div class="d-flex justify-content-center" style="text-align: justify">
                    {!! $mision !!}
                </div>
            </div>
        </div>
    </div>
@endsection
