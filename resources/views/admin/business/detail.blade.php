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
                        <a href="{{ route('show.businessField') }}" class="btn btn-danger d-none d-sm-inline-block">
                            Kembali ke bidang usaha
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="fs-3 mb-5">Anggota komunitas yang tarkait bidang "{{ $business->nama_bidang_usaha }}"</h5>
            @if ($members->isNotEmpty())
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row row-cards">
                            @foreach ($members as $item)
                                <div class="col-sm-6 col-lg-4">
                                    <a href="{{ route('show.detailMemberUMKM', $item->id) }}">
                                        <div class="card card-sm">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar me-3 rounded"
                                                        style="background-image: url({{ $item->avatar ? asset('/storage/profiles/'.$item->avatar) : '/unknown/unknown_profile.webp' }})"></span>
                                                    <div>
                                                        <div>{{ $item->nama }}</div>
                                                        <div class="text-muted small">Status anggota:
                                                            {{ $item->status }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{ $members->links('pagination::bootstrap-5') }}
                </div>
            @else
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img src="https://www.svgrepo.com/show/87468/empty-box.svg" width="70" alt=""
                            srcset="">
                    </div>
                    <h3>Belum ada anggota komunitas yang mempunyai bidang ini.</h3>
                </div>
            @endif
        </div>
    </div>
@endsection
