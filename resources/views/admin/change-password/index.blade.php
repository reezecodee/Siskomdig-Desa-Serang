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
    <x-admin.alert.success :success="session('success')" />
    <x-admin.alert.failed :failed="session('error')" />
    <form action="{{ route('change.password') }}" method="post" id="form-edit">
        @csrf
        <div class="card">
            <div class="row g-0">
                <x-admin.profile-sidebar />
                <div class="col d-flex flex-column">
                    <div class="card-body">
                        <h3 class="card-title mt-4">Ganti Password Saya</h3>
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-group">
                                    <div class="form-label">Password saat ini</div>
                                    <input type="text"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        name="current_password" value="{{ old('current_password') }}">
                                    @error('current_password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <div class="form-label">Password baru</div>
                                    <input type="password" class="form-control" name="new_password"
                                        value="{{ old('new_password') }}">
                                    @error('new_password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <div class="form-label">Konfirmasi password baru</div>
                                    <input type="password" class="form-control" name="new_password_confirmation"
                                        value="{{ old('new_password_confirmation') }}">
                                    @error('new_password_confirmation')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent mt-auto">
                        <div class="btn-list justify-content-end">
                            <button class="btn btn-primary" type="button" onclick="confirmAlert('form-edit')">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                                    <polyline points="16 16 12 12 8 16"></polyline>
                                    <line x1="12" y1="12" x2="12" y2="21"></line>
                                    <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                    <polyline points="16 16 12 12 8 16"></polyline>
                                </svg> Ganti password
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
