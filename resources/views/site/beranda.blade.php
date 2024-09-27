@extends('layouts.site')
@section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <x-site.navbar/>

        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="/images/banner/kantor-desa2.webp" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-center">
                                    <h1 class="display-3 text-uppercase text-white mb-4 dropshadow-welcome">SELAMAT
                                        DATANG DI KOMUNITAS DIGITAL DESA SERANG</h1>
                                    <p class="mb-5 fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore
                                    </p>
                                    <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="{{ route('show.login') }}"><i
                                                class="fas fa-play-circle me-2"></i> Ayo Mulai!</a>
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Explore
                                            Komunitas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <div class="container-fluid service mt-5 pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pt-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <h4 class="text-primary">Sejarah Singkat</h4>
                <h1 class="display-6 mb-4">SISKOMDES merupakan platform komunitas yang berbasis di Desa Serang,
                    Kabupaten Tasikmalaya</h1>
                <p class="mb-5 px-5 mx-4">Diluncurkan pada tahun 2024, SISKOMDES (Sistem Informasi Komunitas Digital
                    Desa Serang)
                    merupakan platform digital yang dirancang khusus untuk mendukung komunitas pengusaha UMKM di Desa
                    Serang, Kabupaten Tasikmalaya. Platform ini hadir dengan tujuan memfasilitasi pertumbuhan ekonomi
                    lokal melalui akses informasi, promosi, dan kolaborasi antar pelaku usaha. Dengan SISKOMDES, kami
                    percaya bahwa pengusaha UMKM dapat lebih mudah memperluas jaringan, meningkatkan pemasaran produk
                    secara digital, serta memperoleh dukungan dari berbagai pihak untuk pengembangan usaha mereka. Kami
                    optimis, melalui inovasi ini, Desa Serang akan menjadi contoh desa yang mandiri dan berdaya saing di
                    era digital.
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Jelajahi informasi kami</a>
            </div>
        </div>
    </div>

    <div class="container-fluid feature pb-5">
        <div class="container pb-5">
            <div class="text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <h1 class="display-6 mb-2 text-primary">Bagaimana cara kami beroperasi?</h1>
                <p class="mb-0">Untuk menggambarkan bagaimana cara kami bekerja, kami selalu menerapkan nilai-nilai
                    seperti Inovasi, Kolaborasi, dan Digitalisasi.
                </p>
            </div>
            <div class="row g-3">
                <div class="col-md-4 wow fadeInUp">
                    <div class="text-center">
                        <img src="/images/action/inovasi.webp"
                            class="w-100 mb-2" alt="" srcset="">
                        <h4 class="fw-bold">Inovasi</h4>
                        <p>Kami memberikan informasi inovasi bagaimana cara memajukan UMKM di berbagai sektor.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="text-center">
                        <img src="/images/action/kolaborasi.webp"
                            class="w-100 mb-2" alt="" srcset="">
                        <h4 class="fw-bold">Kolaborasi</h4>
                        <p>Berkolaborasi dengan Universitas Bina Sarana Informatika, guna belajar informasi akademik dan
                            dunia informatika.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="text-center">
                        <img src="/images/action/digitalisasi.webp"
                            class="w-100 mb-2" alt="" srcset="">
                        <h4 class="fw-bold">Digitalisasi</h4>
                        <p>Membimbing pelaku UMKM untuk memanfaatkan E-commerce sebagai sarana perluasan jangkauan
                            pasar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid offer-section pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <h1 class="display-6 mb-4">Timeline Perjalanan Kami</h1>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-12">
                        <div class="timeline timeline-line-solid">
                            <div class="timeline-item">
                                <div class="timeline-point"></div>
                                <div class="timeline-event">
                                    <div class="widget has-shadow">
                                        <div class="widget-body">
                                            <img src="https://images.unsplash.com/photo-1719937206094-8de79c912f40?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                class="w-100" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item">
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

                            <div class="timeline-item">
                                <div class="timeline-point"></div>
                                <div class="timeline-event">
                                    <div class="widget has-shadow">
                                        <div class="widget-body">
                                            <img src="https://images.unsplash.com/photo-1719937206094-8de79c912f40?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                class="w-100" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item">
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

                            <div class="timeline-item">
                                <div class="timeline-point"></div>
                                <div class="timeline-event">
                                    <div class="widget has-shadow">
                                        <div class="widget-body">
                                            <img src="https://images.unsplash.com/photo-1719937206094-8de79c912f40?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                class="w-100" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item">
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

    <div class=" blog pb-5">
        <div class="pb-5">
            <div class="mx-auto pb-5" style="max-width: 100%;">
                <blockquote class="quote-box p-5">
                    <div class="p-5">
                        <span class="quotation-mark display-3">
                            <img src="https://www.svgrepo.com/show/500981/quote.svg" width="90" alt="" srcset=""
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
        </div>
    </div>


    <div class="container-fluid faq-section pb-5">
        <div class="container pb-5 overflow-hidden">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-5 mb-4">Pertanyaan yang Sering Ditanyakan</h1>
                <p class="mb-0">Berikut ini merupakan pertanyaan yang sering ditanyakan oleh para pelaku UMKM Desa
                    Serang.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What Does This Tool Do?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
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
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
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
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
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
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
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
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
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
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded">
                        <img src="img/about-2.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid faq-section pb-5">
        <div class="container pb-5 overflow-hidden">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-5 mb-4">Kontak dan Lokasi Kami</h1>
                <p class="mb-0">Berikut ini merupakan layanan kontak komunitas digital Desa Serang dan Google maps
                    lokasi kantor kami.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
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
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div>
                        <iframe class="rounded"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126619.1701065989!2d107.92043158374089!3d-7.370808845151316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68aad352cf5145%3A0x5006e10595e9d02b!2sBalai%20Desa%20Serang!5e0!3m2!1sid!2sid!4v1727364917661!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-5 mb-4">Terimakasih Kepada</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div>
                            <img src="/images/partner/kabupaten-tasikmalaya.webp"
                                class="img-fluid w-50" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div>
                            <img src="/images/partner/smart-village.webp" class="img-fluid w-50" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div>
                            <img src="/images/partner/univ-bsi.webp"
                                class="img-fluid w-50" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div>
                            <img src="/images/partner/kementrian-desa.webp"
                                class="img-fluid w-50" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
