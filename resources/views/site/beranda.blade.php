@extends('layouts.site')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12">
                    <h1 class="mb-5 display-2 text-white drop-shadow-header">Selamat Datang di Komunitas Digital Desa Serang
                    </h1>
                    @auth
                        <a href="{{ route('show.dashboardAdmin') }}"
                            class="btn btn-primary px-4 py-3 px-md-5 me-4 btn-border-radius mb-3 mb-sm-0">Dashboard admin</a>
                    @else
                        <a href="{{ route('show.login') }}"
                            class="btn btn-primary px-4 py-3 px-md-5 me-4 btn-border-radius mb-3 mb-sm-0">Ayo
                            mulai!</a>
                    @endauth
                    <a href="{{ route('site.anggotaUMKM') }}"
                        class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Explore anggota</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5 about bg-light">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Tentang Desa Serang</h4>
                    <h1 class="text-dark mb-4 display-6">Detail informasi tentang Desa Serang</h1>
                    <p class="text-dark mb-4">
                        {!! $application->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if (!$informations->isEmpty())
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Informasi Terbaru Kami</h4>
                </div>
                <div class="row g-4 justify-content-center mt-3">
                    @foreach ($informations as $item)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="{{ route('site.bacaInformasi', $item->id) }}" class="text-decoration-none">
                                <div class="blog-item rounded shadow-sm overflow-hidden bg-white">
                                    <!-- Gambar Artikel -->
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img src="{{ $item->thumbnail ? asset('storage/images/' . $item->thumbnail) : 'https://via.placeholder.com/2070x1380' }}"
                                            class="img-fluid w-100" alt="Image"
                                            style="object-fit: cover; height: 200px;">
                                    </div>

                                    <!-- Tanggal dan Komentar -->
                                    <div class="d-flex justify-content-between px-4 py-2 border-bottom border-primary">
                                        <small class="text-muted"><i
                                                class="fas fa-calendar-alt me-1"></i>{{ $item->created_at->format('d M Y') }}</small>
                                    </div>

                                    <!-- Konten Blog -->
                                    <div class="px-4 py-3">
                                        <div class="blog-text-inner mb-2">
                                            <h6 class="text-dark">{{ truncateText($item->judul) }}</h6>
                                        </div>

                                        <!-- Informasi Admin -->
                                        <div class="d-flex align-items-center">
                                            <div class="overflow-hidden rounded-circle border border-primary">
                                                <img src="{{ $item->users->avatar ? asset('storage/profiles/' . $item->users->avatar) : 'https://via.placeholder.com/300x300' }}"
                                                    class="img-fluid rounded-circle p-1" alt="Admin Image"
                                                    style="width: 50px; height: 50px; object-fit: cover;">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 text-primary">{{ $item->users->nama }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-end wow fadeInUp" data-wow-delay="0.3s">
                    <a href="{{ route('site.informasi') }}" class="btn btn-primary px-5 py-3 mt-3">Lihat
                        lebih banyak...</a>
                </div>
            </div>
        </div>
    @endif

    <div>
        <blockquote class="quote-box">
            <div class="container p-5">
                <span class="quotation-mark display-3">
                    <img src="https://www.svgrepo.com/show/500981/quote.svg" width="90" alt="" srcset=""
                        style="filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(360deg) brightness(100%) contrast(100%);">
                </span>
                <p class="quote-text display-6">
                    {{ $application->kutipan_motivasi }}
                </p>
                <p>- {{ $application->pembuat_kutipan }}</p>
            </div>
        </blockquote>
    </div>

    <div class="container-fluid py-5 gradient-green">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Kontak dan Lokasi Kami</h4>
            </div>
            <div class="container overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s"
                    style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <p class="text-dark mb-0">Berikut ini merupakan layanan kontak komunitas digital Desa Serang dan
                        Google maps
                        lokasi kantor kami.
                    </p>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Alamat</h4>
                                <p class="mb-2">{{ $application->alamat ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Email</h4>
                                <p class="mb-2">{{ $application->email ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.7s"
                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Telepon</h4>
                                <p class="mb-2">{{ $application->telepon }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <div class="accordion accordion-flush rounded" id="accordionFlushSection">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Telepon</label>
                                <input type="number" class="form-control" name="" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <textarea rows="7" name="" class="form-control" id=""></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Kirim pesan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <div>
                            {!! $application->google_maps ?? 'Maps tidak tersedia' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-5 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Terimakasih Kepada</h4>
            </div>
            <div class="d-flex gap-5 justify-content-around align-items-center">
                <a href="https://tasikmalayakab.go.id/" title="Kabupaten Tasikmalaya">
                    <img src="/images/partner/kabupaten-tasikmalaya.webp" class="wow fadeInUp" data-wow-delay="0.3s"
                        alt="" srcset="" width="50">
                </a>
                <a href="https://www.kemendesa.go.id/"
                    title="Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi">
                    <img src="/images/partner/kementrian-desa.webp" class="wow fadeInUp" data-wow-delay="0.5s"
                        alt="" srcset="" width="50">
                </a>
                <a href="https://www.bsi.ac.id/ubsi/index.js" title="Universitas Bina Sarana Informatika">
                    <img src="/images/partner/univ-bsi.webp" class="wow fadeInUp" data-wow-delay="0.7s" alt=""
                        srcset="" width="50">
                </a>
                <a href="http://www.smartvillage-kw.com/" title="Smart Village">
                    <img src="/images/partner/smart-village.webp" class="wow fadeInUp" data-wow-delay="0.9s"
                        alt="" srcset="" width="50">
                </a>
            </div>
        </div>
    </div>
@endsection
