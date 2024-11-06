@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Hasil Pencarian: "{{ $search }}"
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
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
                                                <div class="text-muted small">Bidang usaha: {{ $item->businessFields->nama_bidang_usaha }}</div>
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
        <p>Tidak ada data yang ditemukan.</p>
    @endif
@endsection
