@extends('users.components.master')
@section('title', 'Rekomendasi')
@section('content')
<div class="container">
  <div class="row">
    <div class="col col-12">
      <div class="card mt-4 py-3 px-3 px-md-5">
        <div class="card-body">
          <div class="row mt-2">
            <h1 class="fs-3 fw-bolder text-uppercase text-center text-color-secondary mb-3 mb-md-5">hasil rekomendasi</h1>
          </div>

          <div name="furnitures" class="row">
            @if(sizeof($result) < 1) Tidak Menemukan Apa Yang Cocok Buatmu Nih!! &#128512 @else @foreach($result as $item) <div class="col-12 col-md-4">
              <div class="card card-furniture shadow-none border border-light border-4 mt-4 mt-md-0 rounded-9">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                  @foreach (json_decode($item->foto, true) as $key=>$image)
                  @if($key == 0)
                  <img src="{{ asset('img/koleksi-img/'.$image) }}" height="250" width="100%" style="object-fit: contain" />
                  @endif
                  @endforeach
                  <h4 class="text-uppercase fs-5 text-grayish">{{ $item->nama_koleksi }}</h4>
                  <a href="detail.html" class="text-uppercase bg-color-primary py-1 px-5 text-decoration-none text-white fw-semibold">detail</a>
                </div>
              </div>
          </div>
          @endforeach
          @endif
        </div>
        <div class="row text-center">
          <div class="col-12">
            <img src="{{ asset('assets/images/logo.png') }}" alt="armof" height="50" class="mt-5 mb-3" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection