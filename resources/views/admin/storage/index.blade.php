@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Storage
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('show.dashboardAdmin') }}" class="btn btn-danger">
                                Kembali ke dashboard
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <p>Statistik Penyimpanan</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="mb-3">Digunakan <strong>{{ $totalUsedSpace }} GB </strong>dari {{ $totalSpace }} GB penyimpanan server</p>
                            <div class="progress progress-separated mb-3">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $percentage['percentageFile'] }}%"
                                    aria-label="file">
                                </div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ $percentage['percentageDB'] }}%" aria-label="database">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto d-flex align-items-center pe-2">
                                    <span class="legend me-2 bg-primary"></span>
                                    <span>File ({{ $storageSize }}GB)</span>
                                </div>
                                <div class="col-auto d-flex align-items-center px-2">
                                    <span class="legend me-2 bg-info"></span>
                                    <span>Database ({{ $databaseSize }}MB)</span>
                                </div>
                                <div class="col-auto d-flex align-items-center ps-2">
                                    <span class="legend me-2"></span>
                                    <span>Free ({{ $freeSpace }}GB)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total file di storage</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $count['countFiles'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total tabel database</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $count['countTables'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <p>File yang diupload</p>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('show.images', 'semua-gambar') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <div class="d-flex justify-content-center">
                                            <img src="https://www.svgrepo.com/show/362099/folder-picture.svg" alt=""
                                                class="w-50" srcset="" loading="lazy">
                                        </div>
                                        <p class="text-center">Semua gambar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('show.images', 'photo') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <div class="d-flex justify-content-center">
                                            <img src="https://www.svgrepo.com/show/446526/avatar-portrait.svg" alt=""
                                                class="w-50" srcset="" loading="lazy">
                                        </div>
                                        <p class="text-center">Gambar foto</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('show.archives') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <div class="d-flex justify-content-center">
                                            <img src="https://www.svgrepo.com/show/301070/folder.svg" alt=""
                                                class="w-50" srcset="" loading="lazy">
                                        </div>
                                        <p class="text-center">Arsip kegiatan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
