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
                    <li class="breadcrumb-item"><a href="#">Mitra Komunitas</a></li>
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
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="img/team-1.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                href=""><i class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">Linda Carlson</h4>
                            <p class="text-muted mb-2">English Teacher</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                href=""><i class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">Linda Carlson</h4>
                            <p class="text-muted mb-2">English Teacher</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                href=""><i class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">Linda Carlson</h4>
                            <p class="text-muted mb-2">English Teacher</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                href=""><i class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">Linda Carlson</h4>
                            <p class="text-muted mb-2">English Teacher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
