@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/produk-umkm.webp);
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">PRODUK UMKM</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Mita Komunitas</a></li>
                    <li class="breadcrumb-item active text-primary">Produk UMKM</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <h4 class="fw-bold mb-4">SAYUR MAYUR</h4>
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <div class="card p-3" style="width: 18rem;">
                            <img src="https://plus.unsplash.com/premium_photo-1667052359640-4b3b56e52f49?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fHw%3D"
                                class="rounded mb-3" alt="...">
                            <div class="card-body p-0">
                                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3" style="width: 18rem;">
                            <img src="https://plus.unsplash.com/premium_photo-1667052359640-4b3b56e52f49?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fHw%3D"
                                class="rounded mb-3" alt="...">
                            <div class="card-body p-0">
                                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3" style="width: 18rem;">
                            <img src="https://plus.unsplash.com/premium_photo-1667052359640-4b3b56e52f49?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fHw%3D"
                                class="rounded mb-3" alt="...">
                            <div class="card-body p-0">
                                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3" style="width: 18rem;">
                            <img src="https://plus.unsplash.com/premium_photo-1667052359640-4b3b56e52f49?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fHw%3D"
                                class="rounded mb-3" alt="...">
                            <div class="card-body p-0">
                                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <nav aria-label="...">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item active">
                        <a class="page-link" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
