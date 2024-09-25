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
                    <h3 class="card-title mt-4">Ganti Password Saya</h3>
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-label">Password saat ini</div>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md">
                            <div class="form-label">Password baru</div>
                            <input type="password" class="form-control" name="" value="">
                        </div>
                        <div class="col-md">
                            <div class="form-label">Konfirmasi password</div>
                            <input type="password" class="form-control" name="" value="">
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent mt-auto">
                    <div class="btn-list justify-content-end">
                        <a href="#" class="btn">
                            Batalkan
                        </a>
                        <a href="#" class="btn btn-primary">
                            Ganti password
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
