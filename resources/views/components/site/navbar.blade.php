<!-- Navbar start -->
<div class="container-fluid border-bottom wow fadeIn" data-wow-delay="0.1s">
    <div class="container px-0">
        <nav class="navbar navbar-light navbar-expand-xl py-3">
            <a href="/" class="navbar-brand">
                <img src="{{ $application->logo ? '/'.$application->logo : '' }}" width="160" alt="Logo" srcset="">
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('site.beranda') }}"
                        class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                    <a href="{{ route('site.visiMisi') }}"
                        class="nav-item nav-link {{ Request::is('visi-dan-misi*') ? 'active' : '' }}">Visi & Misi</a>
                    <a href="{{ route('site.strukturOrganisasi') }}"
                        class="nav-item nav-link {{ Request::is('struktur-organisasi*') ? 'active' : '' }}">Struktur
                        Organisasi</a>
                    <div class="nav-item dropdown">
                        <a href="javascript:void(0)"
                            class="nav-link dropdown-toggle {{ Request::is('agenda*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Agenda</a>
                        <div class="dropdown-menu m-0 rounded-0">
                            <a href="{{ route('site.agendaKegiatan') }}"
                                class="dropdown-item {{ Request::is('agenda/agenda-kegiatan*') ? 'active' : '' }}">Jadwal
                                Agenda Kegiatan</a>
                            <a href="{{ route('site.arsipKegiatan') }}"
                                class="dropdown-item {{ Request::is('agenda/arsip-kegiatan*') ? 'active' : '' }}">Arsip
                                Agenda Kegiatan</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="javascript:void(0)"
                            class="nav-link dropdown-toggle {{ Request::is('mitra-komunitas*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Mitra</a>
                        <div class="dropdown-menu m-0 rounded-0">
                            <a href="{{ route('site.anggotaUMKM') }}"
                                class="dropdown-item {{ Request::is('mitra-komunitas/anggota-umkm*') ? 'active' : '' }}">Anggota
                                Komunitas</a>
                            <a href="{{ route('site.businessField') }}"
                                class="dropdown-item {{ Request::is('mitra-komunitas/bidang-usaha*') ? 'active' : '' }}">Bidang Usaha</a>
                        </div>
                    </div>
                    <a href="{{ route('site.informasi') }}"
                        class="nav-item nav-link {{ Request::is('informasi*') ? 'active' : '' }}">Informasi</a>
                </div>
                <div class="d-flex me-4">
                    <div id="phone-tada" class="d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0)" class="position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt text-primary fa-2x me-4"></i>
                            <div class="position-absolute" style="top: -7px; left: 20px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex flex-column pe-3">
                        <span class="text-primary">Punya pertanyaan?</span>
                        <a href="#"><span class="text-secondary">Telp:
                                {{ $application->telepon ?? '' }}</span></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
