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
    @if (auth()->check() && auth()->user()->avatar)
        <form action="{{ route('destroy.avatar', auth()->user()->id) }}" method="POST" id="delete-form-avatar">
            @csrf
            @method('DELETE')
        </form>
    @endif
    <form action="{{ route('update.profile', auth()->user()->id) }}" method="POST" enctype="multipart/form-data"
        id="form-edit">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="row g-0">
                <x-admin.profile-sidebar />
                <div class="col d-flex flex-column">
                    <div class="card-body">
                        <h3 class="card-title">Detail Profile</h3>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-label">Username</div>
                                    <input type="text"
                                        class="form-control @error('username')
                                         is-invalid
                                    @enderror"
                                        name="username" value="{{ old('username', auth()->user()->username) }}"
                                        placeholder="Masukkan username" required>
                                    @error('username')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-label">Nama Lengkap</div>
                                    <input type="text"
                                        class="form-control @error('nama')
                                         is-invalid
                                    @enderror"
                                        name="nama" value="{{ old('nama', auth()->user()->nama) }}"
                                        placeholder="Masukkan nama lengkap" required>
                                    @error('nama')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-label">Email</div>
                                    <input type="email"
                                        class="form-control @error('email')
                                         is-invalid
                                    @enderror"
                                        name="email" value="{{ old('email', auth()->user()->email) }}"
                                        placeholder="Masukkan email aktif" required>
                                    @error('email')
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
                                </svg> Simpan profile
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
