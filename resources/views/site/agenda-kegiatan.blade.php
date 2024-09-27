@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/agenda-kegiatan.webp);
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">AGENDA KEGIATAN</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Profile Komunitas</a></li>
                    <li class="breadcrumb-item active text-primary">Agenda Kegiatan</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">STRUKTUR KEORGANISASIAN</h4>
            </div>
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12">
                            <img src="https://newprofilepic.photo-cdn.net//assets/images/article/profile.jpg?90af0c8"
                                width="80" class="rounded-circle" alt="" srcset="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 right-line"></div>
                        <div class="col-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-3 right-line"></div>
                        <div class="col-3 right-line top-line"></div>
                        <div class="col-3 right-line top-line"></div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-2">Child</div>
                        <div class="col-4">Bigger Child</div>
                        <div class="col-2">Child</div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-6 right-line"></div>
                        <div class="col-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-3 p-0">
                            <div class="halved right-line"></div>
                            <div class="halved top-line"></div>
                        </div>
                        <div class="col-3 p-0">
                            <div class="halved right-line top-line"></div>
                            <div class="halved top-line"></div>
                        </div>
                        <div class="col-3 p-0">
                            <div class="halved right-line top-line"></div>
                            <div class="halved top-line"></div>
                        </div>
                        <div class="col-3 p-0">
                            <div class="halved right-line top-line"></div>
                            <div class="halved"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">GrandChild</div>
                        <div class="col-3">GrandChild</div>
                        <div class="col-3">GrandChild</div>
                        <div class="col-3">GrandChild</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
