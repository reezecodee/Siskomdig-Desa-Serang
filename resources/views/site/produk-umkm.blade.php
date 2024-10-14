@extends('layouts.site')
@section('content')
<style>
    .page-header {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/produk-umkm.webp);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4">Produk UMKM</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Profile Komunitas</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Produk UMKM</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Produk UMKM</h4>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="img/event-1.jpg" class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="img/event-1.jpg" data-lightbox="event-1"><i
                                            class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                    12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New
                                    York</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4">Music & drawing workshop</a>
                            <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed
                                purus consectetur,</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="img/event-2.jpg" class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="img/event-3.jpg" data-lightbox="event-1"><i
                                            class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                    12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New
                                    York</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4">Why need study</a>
                            <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed
                                purus consectetur,</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="img/event-3.jpg" class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="img/event-3.jpg" data-lightbox="event-1"><i
                                            class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                    12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New
                                    York</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4">Child health consciousness</a>
                            <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed
                                purus consectetur,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
