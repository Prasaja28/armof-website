@extends('users.components.master')
@section('title', 'Koleksi')
@section('content')
<div class="container">
  <div class="row">
    <div class="col col-12">
      <div class="card mt-4 py-3 px-3 px-md-3">
        <div class="card-body">
          <div class="row mt-2 mb-3 mb-md-6">
            <div class="col-12 col-md-4">
              <form class="form" method="get" action="{{ route('search') }}">
                <div class="d-flex justify-content-center align-items-center form-search">
                  <input name="q" id="search" type="text" class="form-control form-control-lg rounded-pill" placeholder="cari produk..." />
                  <a href="" onClick="javascript:this.form.submit();">
                    <i class="fas fa-search"></i>
                  </a>
                </div>
              </form>
            </div>
          </div>

          <div name="furnitures" class="row">
            @if ($koleksi->count() != 0)
            @foreach ($koleksi as $dataKoleksi)
            <div class="col-12 col-md-3">
              <div class="card card-furniture shadow-none border border-light border-4 mt-4 mt-md-0 rounded-9">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                  @foreach(json_decode($dataKoleksi->foto) as $key => $image)
                  @if($key == 0)
                  <img src="{{ asset('img/koleksi-img/'.$image) }}" height="200" width="100%" style="object-fit: contain" />
                  @endif
                  @endforeach
                  <h4 class="text-uppercase fs-5 text-grayish">{{$dataKoleksi->nama_koleksi}}</h4>
                  <a href="{{ '/detail/'.$dataKoleksi->id }}" class="text-uppercase bg-color-primary py-1 px-5 text-decoration-none text-white fw-semibold">detail</a>
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
          <!-- <div name="furnitures" class="row mt-0 mt-5">
            <div class="col-12 col-md-3">
              <div class="card card-furniture shadow-none border border-light border-4 mt-4 mt-md-0 rounded-9">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                  <img src="assets/images/kursi.png" height="200" />
                  <h4 class="text-uppercase fs-5 text-grayish">kursi</h4>
                  <a href="detail.html" class="text-uppercase bg-color-primary py-1 px-5 text-decoration-none text-white fw-semibold">detail</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="card card-furniture shadow-none border border-light border-4 mt-4 mt-md-0 rounded-9">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                  <img src="assets/images/kursi.png" height="200" />
                  <h4 class="text-uppercase fs-5 text-grayish">kursi</h4>
                  <a href="detail.html" class="text-uppercase bg-color-primary py-1 px-5 text-decoration-none text-white fw-semibold">detail</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="card card-furniture shadow-none border border-light border-4 mt-4 mt-md-0 rounded-9">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                  <img src="assets/images/kursi.png" height="200" />
                  <h4 class="text-uppercase fs-5 text-grayish">kursi</h4>
                  <a href="detail.html" class="text-uppercase bg-color-primary py-1 px-5 text-decoration-none text-white fw-semibold">detail</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="card card-furniture shadow-none border border-light border-4 mt-4 mt-md-0 rounded-9">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                  <img src="assets/images/kursi.png" height="200" />
                  <h4 class="text-uppercase fs-5 text-grayish">kursi</h4>
                  <a href="detail.html" class="text-uppercase bg-color-primary py-1 px-5 text-decoration-none text-white fw-semibold">detail</a>
                </div>
              </div>
            </div>
          </div> -->
          <div class="row text-center">
            <div class="col-12">
              <img src="assets/images/logo.PNG" alt="armof" height="50" class="mt-5 mb-3" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection