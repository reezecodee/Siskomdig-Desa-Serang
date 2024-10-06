@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/informasi.webp);
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">INFORMASI</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Profile Komunitas</a></li>
                    <li class="breadcrumb-item active text-primary">Informasi</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <h4 class="fw-bold mb-4">INFORMASI TERBARU</h4>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <img src="https://images.unsplash.com/photo-1726809448984-2e7f60cc6e97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut
                                aliquam suscipit error corporis accusamus labore....
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle"
                                    style="width: 60px; height: 60px;" alt="">
                                <div class="ms-3">
                                    <h5>Admin</h5>
                                    <p class="mb-0">October 9, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <img src="https://images.unsplash.com/photo-1726809448984-2e7f60cc6e97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut
                                aliquam suscipit error corporis accusamus labore....
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle"
                                    style="width: 60px; height: 60px;" alt="">
                                <div class="ms-3">
                                    <h5>Admin</h5>
                                    <p class="mb-0">October 9, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <img src="https://images.unsplash.com/photo-1726809448984-2e7f60cc6e97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut
                                aliquam suscipit error corporis accusamus labore....
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle"
                                    style="width: 60px; height: 60px;" alt="">
                                <div class="ms-3">
                                    <h5>Admin</h5>
                                    <p class="mb-0">October 9, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <img src="https://images.unsplash.com/photo-1726809448984-2e7f60cc6e97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut
                                aliquam suscipit error corporis accusamus labore....
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle"
                                    style="width: 60px; height: 60px;" alt="">
                                <div class="ms-3">
                                    <h5>Admin</h5>
                                    <p class="mb-0">October 9, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <img src="https://images.unsplash.com/photo-1726809448984-2e7f60cc6e97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut
                                aliquam suscipit error corporis accusamus labore....
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle"
                                    style="width: 60px; height: 60px;" alt="">
                                <div class="ms-3">
                                    <h5>Admin</h5>
                                    <p class="mb-0">October 9, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <img src="https://images.unsplash.com/photo-1726809448984-2e7f60cc6e97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100 rounded" alt="" loading="lazy">
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut
                                aliquam suscipit error corporis accusamus labore....
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle"
                                    style="width: 60px; height: 60px;" alt="">
                                <div class="ms-3">
                                    <h5>Admin</h5>
                                    <p class="mb-0">October 9, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
