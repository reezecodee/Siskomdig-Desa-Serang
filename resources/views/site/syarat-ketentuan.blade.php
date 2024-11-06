@extends('layouts.site')
@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h3 class="fw-bold">Syarat dan ketentuan</h3>
            {!! $termsAndConditions ?? '' !!}
        </div>
    </div>
@endsection
