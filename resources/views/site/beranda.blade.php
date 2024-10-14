@extends('layouts.site')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12">
                    <h1 class="mb-5 display-2 text-white drop-shadow-header">Selamat Datang di Komunitas Digital Desa Serang</h1>
                    <a href="{{ route('show.login') }}" class="btn btn-primary px-4 py-3 px-md-5  me-4 btn-border-radius">Ayo mulai!</a>
                    <a href="{{ route('site.anggotaUMKM') }}" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Explore anggota</a>
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
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Sejarah Singkat</h4>
                    <h1 class="text-dark mb-4 display-6">SISKOMDES merupakan platform komunitas yang berbasis di Desa
                        Serang, Kabupaten Tasikmalaya</h1>
                    <p class="text-dark mb-4">Diluncurkan pada tahun 2024, SISKOMDES (Sistem Informasi Komunitas Digital
                        Desa Serang) merupakan platform digital yang dirancang khusus untuk mendukung komunitas
                        pengusaha UMKM di Desa Serang, Kabupaten Tasikmalaya. Platform ini hadir dengan tujuan
                        memfasilitasi pertumbuhan ekonomi lokal melalui akses informasi, promosi, dan kolaborasi antar
                        pelaku usaha. Dengan SISKOMDES, kami percaya bahwa pengusaha UMKM dapat lebih mudah memperluas
                        jaringan, meningkatkan pemasaran produk secara digital, serta memperoleh dukungan dari berbagai
                        pihak untuk pengembangan usaha mereka. Kami optimis, melalui inovasi ini, Desa Serang akan
                        menjadi contoh desa yang mandiri dan berdaya saing di era digital.
                    </p>
                    <a href="" class="btn btn-primary px-5 py-3 btn-border-radius">Eksplor Komunitas</a>
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
                <div class="col-md-4">
                    <div class="card w-full">
                        <img src="http://127.0.0.1:8000/images/action/inovasi.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Kami memberikan informasi inovasi bagaimana cara memajukan UMKM di
                                berbagai sektor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-full">
                        <img src="http://127.0.0.1:8000/images/action/inovasi.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Berkolaborasi dengan Universitas Bina Sarana Informatika, guna belajar
                                informasi akademik dan dunia informatika.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-full">
                        <img src="http://127.0.0.1:8000/images/action/inovasi.webp" class="card-img-top" alt="...">
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
                            <div class="timeline-item">
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
                                            <img src="https://images.unsplash.com/photo-1719937206094-8de79c912f40?q=80&amp;w=2070&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
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
                                            <img src="https://images.unsplash.com/photo-1719937206094-8de79c912f40?q=80&amp;w=2070&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
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
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
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
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <div class="bg-primary rounded">
                            <img src="img/about-2.png" class="img-fluid w-100" alt="">
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
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
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
    </div>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-5 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Terimakasih Kepada</h4>
            </div>
            <div class="container">
                <div class="d-flex gap-5 justify-content-around align-items-center">
                    <img src="/images/partner/kabupaten-tasikmalaya.webp" alt=""
                        srcset="" width="60">
                    <img src="/images/partner/kementrian-desa.webp" alt=""
                        srcset="" width="60">
                    <img src="/images/partner/univ-bsi.webp" alt=""
                        srcset="" width="60">
                    <img src="/images/partner/smart-village.webp" alt=""
                        srcset="" width="60">
                </div>
            </div>
        </div>
    </div>
@endsection
