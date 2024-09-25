@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Profile
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="row g-0">
            <x-admin.profile-sidebar/>
            <div class="col d-flex flex-column">
                <div class="card-body">
                    <h3 class="card-title">Detail Profile</h3>
                    <div class="row align-items-center">
                        <div class="col-auto"><span class="avatar avatar-xl"
                                style="background-image: url(./static/avatars/000m.jpg)"></span>
                        </div>
                        <div class="col-auto"><a href="#" class="btn">
                                Ganti avatar
                            </a></div>
                        <div class="col-auto"><a href="#" class="btn btn-ghost-danger">
                                Hapus avatar
                            </a></div>
                    </div>
                    <h3 class="card-title mt-4">Data Admin</h3>
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-label">Username</div>
                            <input type="text" class="form-control" name="username" value="">
                        </div>
                        <div class="col-md">
                            <div class="form-label">Nama Lengkap</div>
                            <input type="text" class="form-control" name="nama" value="">
                        </div>
                        <div class="col-md">
                            <div class="form-label">Telepon</div>
                            <input type="number" class="form-control" name="telepon" value="">
                        </div>
                    </div>
                    <h3 class="card-title mt-4">Email</h3>
                    <p class="card-subtitle">Jika kamu mengganti email maka kamu harus melakukan verifikasi lagi.</p>
                    <div>
                        <div class="row g-2">
                            <div class="col-auto">
                                <input type="email" class="form-control w-auto" value="">
                            </div>
                            <div class="col-auto"><a href="#" class="btn">
                                    Ganti
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent mt-auto">
                    <div class="btn-list justify-content-end">
                        <a href="#" class="btn btn-primary">
                            Simpan profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
