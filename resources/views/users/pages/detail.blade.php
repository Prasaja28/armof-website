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
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-bottom:5%;">
                <div class="carousel-inner">
                  @foreach(json_decode($detailKoleksi->foto) as $image)
                  <div class="carousel-item active">
                    <img src="{{ asset('img/koleksi-img/'.$image) }}" height="250" />
                  </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
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
                <a href="{{$detailKoleksi->link_ar}}" class="text-uppercase bg-color-primary py-2 px-4 text-decoration-none text-white fw-semibold">view ar</a>
                <a href="{{route('downloadPDF', $detailKoleksi->id)}}" class="text-uppercase bg-color-primary py-2 px-4 text-decoration-none text-white fw-semibold ms-3">download</a>
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