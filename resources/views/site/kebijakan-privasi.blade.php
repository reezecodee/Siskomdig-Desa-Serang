@extends('layouts.site')
@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h3 class="fw-bold">Kebijakan privasi</h3>
            {!! $privacyPolicy ?? '' !!}
        </div>
    </div>
@endsection
