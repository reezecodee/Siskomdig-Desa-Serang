@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Storage Semua Arsip
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('show.storage') }}" class="btn btn-danger">
                                Kembali
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
            <div class="row">
                @foreach ($paginatedFiles as $index => $file)
                <div class="col-md-3">
                    <a href="{{ asset('storage/archives/' . $file) }}" download title="Klik untuk mendownload">
                        <div class="text-center">
                            <div class="d-flex justify-content-center mb-1">
                                <img src="https://www.svgrepo.com/show/474852/folder.svg" alt=""
                                    srcset="" width="150" class="rounded" loading="lazy">
                            </div>
                            <p>{{ truncateText($file) }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                {{ $paginatedFiles->links('pagination::bootstrap-5') }}
            </div>
            @if ($paginatedFiles->isEmpty())
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img src="https://www.svgrepo.com/show/87468/empty-box.svg" width="70" alt=""
                            srcset="">
                    </div>
                    <h3>Belum ada file yang di upload</h3>
                </div>
            @endif
        </div>
    </div>
@endsection
