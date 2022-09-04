@extends('users.components.master')
@section('title', 'Detail')
@section('content')
<div class="container">
  @if ($detailKoleksi->count() != 0)
  <div class="row">
    <div class="col col-12">
      <div class="card mt-4 py-3 px-3 px-md-5">
        <div class="card-body">
          <div class="row mt-2 justify-content-center">
            <div class="col-4 d-flex justify-content-center align-items-center">
              @foreach(json_decode($detailKoleksi->foto) as $image)
              <img src="{{ asset('img/koleksi-img/'.$image) }}" height="250" />
              @endforeach
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <h1 class="fs-4 fw-bold text-uppercase text-color-primary mt-5 mt-md-0">{{$detailKoleksi->nama_koleksi}}</h1>
              <h1 class="fs-4 fw-bold text-uppercase text-grayish mb-4">detail produk & spesifikasi</h1>
              <p class="fs-6">
                {{$detailKoleksi->deskripsi}}
              </p>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0">
              <div class="d-flex justify-content-end">
                <a href="detail.html" class="text-uppercase bg-color-primary py-2 px-4 text-decoration-none text-white fw-semibold">view ar</a>
                <a href="detail.html" class="text-uppercase bg-color-primary py-2 px-4 text-decoration-none text-white fw-semibold ms-3">download</a>
              </div>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-12">
              <img src="{{ asset('assets/images/logo.PNG') }}" alt="armof" height="50" class="mt-5 mb-3" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>
@endsection