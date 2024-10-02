@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
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
    <form action="{{ route('update.visiMision') }}" method="POST" id="form-store">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="mb-4">
                    <h3>Visi Komunitas</h3>
                    <textarea id="editor" name="visi" required>{{ old('visi', $data->visi) }}</textarea>
                    @error('visi')
                        <span class="text-danger mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <h3>Misi Komunitas</h3>
                    <textarea id="editor" name="misi" required>{{ old('misi', $data->misi) }}</textarea>
                    @error('misi')
                        <span class="text-danger mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="button" onclick="confirmAlert('form-store')"><svg class="icon"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg> Simpan data</button>
                </div>
            </div>
        </div>
    </form>
@endsection
