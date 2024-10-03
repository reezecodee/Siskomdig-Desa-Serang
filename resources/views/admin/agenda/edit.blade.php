@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Edit
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('show.detailActivityAgenda', ['month' => $data->bulan, 'year' => $data->tahun]) }}"
                                class="btn btn-danger">
                                Kembali ke detail agenda
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <x-admin.alert.success :success="session('success')" />
    <form action="{{ route('update.agenda', $data->id) }}" method="POST" id="{{ $data->id }}">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Judul agenda</label>
                            <input type="text" name="judul_agenda"
                                class="form-control @error('judul_agenda') is-invalid
                            @enderror"
                                autocomplete="off" value="{{ old('judul_agenda', $data->judul_agenda) }}"
                                placeholder="Masukkan judul agenda kegiatan" required>
                            @error('judul_agenda')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Bulan</label>
                            <select name="bulan"
                                class="form-select @error('bulan') is-invalid
                            @enderror"
                                autocomplete="off" required>
                                @if (old('bulan') || $data->bulan)
                                    <option value="{{ old('bulan', $data->bulan) }}" selected>
                                        {{ old('bulan', $data->bulan) }}</option>
                                @else
                                    <option selected>--Pilih bulan--</option>
                                @endif
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                            @error('bulan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Tahun</label>
                            <input type="number" value="{{ old('tahun', $data->tahun) }}" name="tahun"
                                class="form-control @error('tahun') is-invalid
                                @enderror"
                                autocomplete="off" placeholder="Masukkan tahun agenda kegiatan" required>
                            @error('tahun')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Tanggal pelaksanaan</label>
                            <input type="date" value="{{ old('tgl_pelaksanaan', $data->tgl_pelaksanaan) }}"
                                name="tgl_pelaksanaan"
                                class="form-control @error('tgl_pelaksanaan') is-invalid
                            @enderror"
                                autocomplete="off" placeholder="Masukkan tanggal pelaksanaan agenda kegiatan" required>
                            @error('tgl_pelaksanaan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="form-label">Keterangan agenda</label>
                            <textarea rows="7" name="keterangan"
                                class="form-control @error('keterangan') is-invalid
                            @enderror" autocomplete="off"
                                placeholder="Masukkan keterangan agenda kegiatan" required>{{ old('keterangan', $data->keterangan) }}</textarea>
                            @error('keterangan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="button" onclick="confirmAlert('{{ $data->id }}')"><svg
                            class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg> Perbarui agenda</button>
                </div>
            </div>
        </div>
    </form>
@endsection
