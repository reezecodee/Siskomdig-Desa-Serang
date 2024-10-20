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
                        <img src="{{ $data->avatar ? asset('storage/profiles/' . $data->avatar) : 'https://via.placeholder.com/300x300' }}"
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
                                <label for="" class="form-label">Email</label>
                                <input type="text" value="{{ $data->email }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Pendapatan</label>
                                <input type="text" value="{{ idr($data->pendapatan) }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Pendapatan tertinggi</label>
                                <input type="text" value="{{ idr($data->pendapatan_tertinggi) }}" class="form-control"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Jenis usaha</label>
                                <input type="text" value="{{ $data->jenis_usaha }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Deskripsi pekerjaan</label>
                                <textarea rows="7" class="form-control" readonly>{{ $data->deskripsi }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="fw-bold">Produk anggota</p>
            @if (!$products->isEmpty())
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-md-3">
                            <a href="{{ route('show.detailProductUMKM', $item->id) }}">
                                <div class="text-center">
                                    <div class="d-flex justify-content-center mb-2">
                                        <img src="{{ $item->foto_produk ? asset('storage/images/' . $item->foto_produk) : 'https://via.placeholder.com/1020x720' }}"
                                            alt="" srcset="" class="rounded" loading="lazy">
                                    </div>
                                    <p>{{ $item->nama_produk }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{ $products->links('pagination::bootstrap-5') }}
            @else
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img src="https://www.svgrepo.com/show/87468/empty-box.svg" width="70" alt=""
                            srcset="">
                    </div>
                    <h3>Anggota ini belum memiliki produk</h3>
                </div>
            @endif
        </div>
    </div>
@endsection
