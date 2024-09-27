<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('site.beranda') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('site.visiMisi') }}" class="nav-item nav-link {{ Request::is('visi-dan-misi') ? 'active' : '' }}">Visi & Misi</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::is('profile-komunitas*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Profile Komunitas</span>
                </a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('site.strukturOrganisasi') }}" class="dropdown-item {{ Request::is('*/struktur-organisasi') ? 'active' : '' }}">Struktur Organisasi</a>
                    <a href="{{ route('site.agendaKegiatan') }}" class="dropdown-item {{ Request::is('*/agenda-kegiatan') ? 'active' : '' }}">Agenda Kegiatan</a>
                    <a href="{{ route('site.arsipKegiatan') }}" class="dropdown-item {{ Request::is('*/arsip-kegiatan') ? 'active' : '' }}">Arsip Kegiatan</a>
                    <a href="{{ route('site.informasi') }}" class="dropdown-item {{ Request::is('*/informasi') ? 'active' : '' }}">Informasi</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::is('mitra-komunitas*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Mitra Komunitas</span>
                </a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('site.anggotaUMKM') }}" class="dropdown-item {{ Request::is('*/anggota-umkm') ? 'active' : '' }}">Anggota UMKM</a>
                    <a href="{{ route('site.produkUMKM') }}" class="dropdown-item {{ Request::is('*/produk-umkm') ? 'active' : '' }}">Produk UMKM</a>
                </div>
            </div>
        </div>
    </div>
</nav>
