@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/visi-misi.webp);
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Visi & Misi</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Visi & Misi</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">VISI</h4>
                <p class="mb-0">
                    {{ $visi }}
                </p>
            </div>
        </div>
        <div class="container py-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary text-center">MISI</h4>
                {{ $mision }}
            </div>
        </div>
    </div>
@endsection
