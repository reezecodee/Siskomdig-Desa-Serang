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
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('show.activityAgenda') }}" class="btn btn-danger">
                                Kembali ke agenda
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
            <div class="mb-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul agenda</th>
                            <th scope="col">Tanggal pelaksanaan</th>
                            <th scope="col">Keterangan kegiatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, nihil.</td>
                            <td>12 Maret 2024</td>
                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam ipsam enim non dolores sunt esse mollitia quibusdam saepe dolor nam!</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, nihil.</td>
                            <td>12 Maret 2024</td>
                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam ipsam enim non dolores sunt esse mollitia quibusdam saepe dolor nam!</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-success"><svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                        <polyline points="16 16 12 12 8 16"></polyline>
                        <line x1="12" y1="12" x2="12" y2="21"></line>
                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                        <polyline points="16 16 12 12 8 16"></polyline>
                    </svg> Export ke Excel</button>
            </div>
        </div>
    </div>
@endsection
