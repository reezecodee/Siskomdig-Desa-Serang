@extends('layouts.site')
@section('content')
    <style>
        .bg-breadcrumb {
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/images/banner/agenda-kegiatan.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 140px 0 60px 0;
            transition: 0.5s;
        }
    </style>
    <div class="container-fluid position-relative p-0">
        <x-site.navbar />
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">AGENDA KEGIATAN</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Profile Komunitas</a></li>
                    <li class="breadcrumb-item active text-primary">Agenda Kegiatan</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1100px;">
                <div class="d-flex justify-content-between align-items-center w-full">
                    <span class="d-block fw-bold">Agenda Kegiatan: {{ $month }} {{ $year }}</span>
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
                    <div class="text-center">
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
@endsection
