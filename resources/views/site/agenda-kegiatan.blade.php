@extends('layouts.site')
@section('content')
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(/images/banner/agenda-kegiatan.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Agenda Kegiatan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Profile Komunitas</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Agenda Kegiatan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Jadwal Agenda</h4>
            </div>
            <div class="container">
                <div class="d-block d-sm-none mb-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex justify-content-center">
                        <span class="fw-bold">Agenda Kegiatan: {{ $month }} {{ $year }}</span>
                    </div>
                </div>
                <div class="mx-auto pb-5" style="max-width: 1100px;">
                    <div class="d-flex justify-content-center justify-content-sm-between align-items-center w-full wow fadeInUp" data-wow-delay="0.3s">
                        <span class="d-none d-sm-block fw-bold">Agenda Kegiatan: {{ $month }}
                            {{ $year }}</span>
                        <form action="" method="GET" class="d-flex gap-2 mb-3">
                            @csrf
                            <input type="month" class="form-control w-100" value="{{ $search }}" name="s"
                                id="month" placeholder="Pilih bulan">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                    </div>
                    @if (!$agendas->isEmpty())
                        <div class="table-container">
                            <table class="bordered-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul agenda</th>
                                        <th>Tanggal pelaksanaan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agendas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->judul_agenda }}</td>
                                            <td>{{ $item->tgl_pelaksanaan }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="d-flex justify-content-center">
                                <img src="https://www.svgrepo.com/show/87468/empty-box.svg" width="70" alt=""
                                    srcset="">
                            </div>
                            <h6>Data agenda kegiatan tidak ditemukan</h6>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
