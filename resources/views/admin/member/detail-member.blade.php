@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Detail
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('show.memberUMKM') }}" class="btn btn-danger d-none d-sm-inline-block">
                            Kembali ke anggota UMKM
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <p class="form-label">Foto anggota</p>
                    <div class="d-flex justify-content-center">
                        <img src="{{ $data->avatar ? asset('storage/profiles/' . $data->avatar) : '/unknown/unknown_profile.webp' }}"
                            class="rounded-circle" width="200" id="imagePreview" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Nama anggota UMKM</label>
                                <input type="text" value="{{ $data->nama }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Telepon (WhatsApp)</label>
                                <input type="text" value="{{ $data->telepon }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Kampung</label>
                                <input type="text" value="{{ $data->kampung }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Rukun tetangga (RT)</label>
                                <input type="text" value="{{ $data->rt }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Rukun warga</label>
                                <input type="text" value="{{ $data->rw }}" class="form-control"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Bidang usaha</label>
                                <input type="text" value="{{ $data->businessFields->nama_bidang_usaha }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">NIB/SKU</label>
                                <input type="text" value="{{ $data->nib_sku }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Status keanggotaan</label>
                                <input type="text" value="{{ $data->status }}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
