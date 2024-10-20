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
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="video border">
                        <button type="button" class="btn btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/o3x0idBuLT8?si=t4jBB70rlr1qWjpS"
                            data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Tentang Desa Serang</h4>
                    <h1 class="text-dark mb-4 display-6">Detail informasi tentang Desa Serang</h1>
                    <p class="text-dark mb-4">Desa Serang adalah desa yang terletak di kecamatan Salawu Kabupaten
                        Tasikmalaya. Desa Serang memiliki sumber daya alam yang melimpah dan pemandangan yang indah serta
                        masyarakatnya yang Harmoni aman dan tentram. Jumlah penduduk desa Serang 4632 jiwa 1468 kepala
                        keluarga. Batas Desa Serang sebelah utara dengan Kecamatan Cigalontang sebelah barat dengan desa
                        karyamukti sebelah selatan dengan Desta margalaksana dan sebelah timur dengan Desa salebu. Mayoritas
                        penduduk desa Serang bermata pencaharian sebagai petani. Selain itu ada juga yang berprofesi sebagai
                        pedagang dan peternak seperti ikan ayam sapi atau kerbau dan domba. Desa Serang memiliki usaha di
                        bidang sewa ke internet dan Pamsimas yang disebar ke masyarakatnya sehingga dapat membantu Aktivitas
                        keseharian masyarakat desa.
                    </p>
                    <a href="{{ route('site.informasi') }}" class="btn btn-primary px-5 py-3 btn-border-radius">Lihat
                        informasi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid service gradient-green py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Bagaimana Kami Bekerja?</h4>
                <p class="mb-5 text-dark">Untuk menggambarkan bagaimana cara kami bekerja, kami selalu menerapkan
                    nilai-nilai seperti Inovasi, Kolaborasi, dan Digitalisasi.</p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="card w-full">
                        <img src="/images/action/inovasi.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Kami memberikan informasi inovasi bagaimana cara memajukan UMKM di
                                berbagai sektor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card w-full">
                        <img src="/images/action/kolaborasi.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Berkolaborasi dengan Universitas Bina Sarana Informatika, guna belajar
                                informasi akademik dan dunia informatika.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="card w-full">
                        <img src="/images/action/digitalisasi.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Membimbing pelaku UMKM untuk memanfaatkan E-commerce sebagai sarana
                                perluasan jangkauan pasar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Timeline Perjalanan Kami</h4>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-12">
                        <div class="timeline timeline-line-solid">
                            <div class="timeline-item wow fadeIn" data-wow-delay="0.3s">
                                <div class="timeline-point"></div>
                                <div class="timeline-event">
                                    <div class="widget has-shadow">
                                        <div class="widget-body">
                                            <img src="https://images.unsplash.com/photo-1719937206094-8de79c912f40?q=80&amp;w=2070&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                class="w-100" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item wow fadeIn" data-wow-delay="0.3s">
                                <div class="timeline-event">
                                    <div class="widget has-shadow">
                                        <div class="widget-body">
                                            <p class="fw-bold">1 Januari 2024</p>
                                            <p>
                                                Kami membentuk tim dengan yang berfokus memajukan pelaku UMKM Desa
                                                Serang, Kabupaten Tasikmalaya. l
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item wow fadeIn" data-wow-delay="0.5s">
                                <div class="timeline-point"></div>
                                <div class="timeline-event">
                                    <div class="widget has-shadow">
                                        <div class="widget-body">
                                            <img src="https://images.unsplash.com/photo-1719937206094-8de79c912f40?q=80&amp;w=2070&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                class="w-100" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item wow fadeIn" data-wow-delay="0.5s">
                                <div class="timeline-event">
                                    <div class="widget has-shadow">
                                        <div class="widget-body">
                                            <p class="fw-bold">20 Mei 2024</p>
                                            <p>
                                                Berkolaborasi dengan Univesitas Bina Sarana Informatika Kota
                                                Tasikmalaya, untuk mengedukasi pelaku UMKM Desa Serang tentang strategi
                                                membangun bisnis di E-commerce.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item wow fadeIn" data-wow-delay="0.7s">
                                <div class="timeline-point"></div>
                                <div class="timeline-event">
                                    <div class="widget has-shadow">
                                        <div class="widget-body">
                                            <img src="https://images.unsplash.com/photo-1719937206094-8de79c912f40?q=80&amp;w=2070&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                class="w-100" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item wow fadeIn" data-wow-delay="0.7s">
                                <div class="timeline-event">
                                    <div class="widget has-shadow">
                                        <div class="widget-body">
                                            <p class="fw-bold">16 Oktober 2024</p>
                                            <p>
                                                Membangun aplikasi SISKOMDES berbasis web bersama Univesitas Bina Sarana
                                                Informatika Kota Tasikmalaya, guna sebagai sarana informasi pelaku UMKM
                                                Desa Serang
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <blockquote class="quote-box">
            <div class="container p-5">
                <span class="quotation-mark display-3">
                    <img src="https://www.svgrepo.com/show/500981/quote.svg" width="90" alt=""
                        srcset=""
                        style="filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(360deg) brightness(100%) contrast(100%);">
                </span>
                <p class="quote-text display-6">
                    Kami memahami setiap langkah dalam proses akan membantu menemukan jalan tercepat dan paling
                    efisien untuk mencapai tujuan kami.
                </p>
                <p>- Kepala Desa Serang</p>
            </div>
        </blockquote>
    </div>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Pertanyaan yang Sering Ditanyakan</h4>
            </div>
            <div class="container overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s"
                    style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <p class="text-dark mb-0">Berikut ini merupakan pertanyaan yang sering ditanyakan oleh para pelaku
                        UMKM Desa
                        Serang.
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <div class="accordion accordion-flush bg-light rounded p-0 p-sm-5" id="accordionFlushSection">
                            <div class="accordion-item rounded-top">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button rounded-top collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        What Does This Tool Do?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                        accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        What Are The Disadvantages Of Online Trading?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                        accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Is Online Trading Safe?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                        accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        What Is Online Trading, And How Dose It Work?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                        accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Which App Is Best For Online Trading?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                        accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-bottom">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        How To Create A Trading Account?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                        accordion body. Nothing more exciting happening here in terms of content, but
                                        just
                                        filling up the space to make it look, at least at first glance, a bit more
                                        representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-md-2 wow fadeInRight" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <div class="">
                            <img src="/images/any/faq.png" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
