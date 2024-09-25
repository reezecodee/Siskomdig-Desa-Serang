@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Hasil Pencarian: ""
                    </h2>
                    <div class="text-muted mt-1">About 2,410 result (0.19 seconds)</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="row g-4">
    <div class="col-3">
      <form action="./" method="get" autocomplete="off" novalidate>
        <div class="subheader mb-2">Category</div>
        <div class="list-group list-group-transparent mb-3">
          <a class="list-group-item list-group-item-action d-flex align-items-center active" href="#">
            Games
            <small class="text-muted ms-auto">24</small>
          </a>
          <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
            Clothing
            <small class="text-muted ms-auto">149</small>
          </a>
          <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
            Jewelery
            <small class="text-muted ms-auto">88</small>
          </a>
          <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
            Toys
            <small class="text-muted ms-auto">54</small>
          </a>
        </div>
      </form>
    </div>
    <div class="col-9">
      <div class="row row-cards">
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url(./static/avatars/000m.jpg)"></span>
                <div>
                  <div>Paweł Kuna</div>
                  <div class="text-muted">3 days ago</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="./static/photos/brainstorming-session-with-creative-designers.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded">JL</span>
                <div>
                  <div>Jeffie Lewzey</div>
                  <div class="text-muted">5 days ago</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url(./static/avatars/002m.jpg)"></span>
                <div>
                  <div>Mallory Hulme</div>
                  <div class="text-muted">yesterday</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
