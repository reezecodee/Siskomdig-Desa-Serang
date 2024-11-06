 <!-- Footer Start -->
 <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="footer-item">
                    <img src="{{ $application->logo ? '/'.$application->logo : '' }}" width="200" alt="Logo" srcset="" class="mb-3">
                    <p class="mb-4">Memberikan kemudahan akses informasi dan layanan bagi masyarakat desa melalui platform digital yang terintegrasi.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="footer-item">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Lokasi kami</h4>
                    <div class="d-flex flex-column align-items-start">
                        <a href="" class="text-body mb-4"><i class="fa fa-map-marker-alt text-primary me-2"></i> {{ $application->alamat }}</a>
                        <a href="" class="text-start rounded-0 text-body mb-4"><i
                                class="fa fa-phone-alt text-primary me-2"></i> {{ $application->telepon ?? '' }}</a>
                        <a href="" class="text-start rounded-0 text-body mb-4"><i
                                class="fas fa-envelope text-primary me-2"></i> {{ $application->email ?? '' }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="footer-item">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Website</h4>
                    <div class="d-flex flex-column align-items-start">
                        <a href="{{ route('site.beranda') }}" class="text-body mb-4">Beranda</a>
                        <a href="{{ route('site.visiMisi') }}" class="text-start rounded-0 text-body mb-4">Visi & Misi</a>
                        <a href="{{ route('site.agendaKegiatan') }}" class="text-start rounded-0 text-body mb-4">Agenda Kegiatan</a>
                        <a href="{{ route('site.arsipKegiatan') }}" class="text-start rounded-0 text-body mb-4">Arsip Kegiatan</a>
                        <a href="{{ route('site.anggotaUMKM') }}" class="text-start rounded-0 text-body mb-4">Anggota Komunitas</a>
                        <a href="{{ route('site.businessField') }}" class="text-start rounded-0 text-body mb-4">Bidang Usaha</a>
                        <a href="{{ route('site.informasi') }}" class="text-start rounded-0 text-body mb-4">Informasi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="footer-item">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Kebijakan</h4>
                    <div class="d-flex flex-column align-items-start">
                        <a href="{{ route('site.syaratKetentuan') }}" class="text-body mb-4">Syarat & Ketentuan</a>
                        <a href="{{ route('site.kebijakanPrivasi') }}" class="text-start rounded-0 text-body mb-4">Kebijakan Privasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light">&copy; {{ date('Y') }} {{ $application->nama_aplikasi }}. All rights reserved.</span>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
