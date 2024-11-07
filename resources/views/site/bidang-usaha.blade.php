@extends('layouts.site')
@section('content')
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/business.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Bidang Usaha</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Mitra Komunitas</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Bidang Usaha</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Bidang Usaha</h4>
            </div>
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-3 p-sm-5">
                        @if (!$businesses->isEmpty())
                            <div class="row">
                                @foreach ($businesses as $item)
                                    <div class="col-sm-6 col-lg-4 mb-3">
                                        <a href="{{ route('site.detailBusinessField', $item->id) }}">
                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div>{{ $item->nama_bidang_usaha }}</div>
                                                            <div class="text-muted small">Total: {{ $item->members_count }}
                                                                Anggota</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
                                <div class="d-flex justify-content-center">
                                    <img src="https://www.svgrepo.com/show/87468/empty-box.svg" width="70"
                                        alt="" srcset="">
                                </div>
                                <h6>Bidang usaha tidak ditemukan</h6>
                            </div>
                        @endif
                        <div class="d-flex justify-content-end mt-5">
                            {{ $businesses->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
