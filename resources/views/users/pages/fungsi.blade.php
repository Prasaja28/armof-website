@extends('users.components.master')
@section('title', 'Fungsi')
@section('content')
<div class="container">
  <div class="row">
    <div class="col col-12">
      <div class="card mt-4 py-3 px-3 px-md-5">
        <div class="card-body">
          <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
            <a href="/furnitures" class="bg-color-primary text-uppercase text-decoration-none fw-bold text-center text-white py-2 px-4 rounded-pill fs-5 flex-fill me-0 me-md-4">sebelumnya</a>
            <div class="garis garis-satu align-self-center garis-secondary"></div>
            <div class="bentuk bentuk-satu bentuk-dasar satu rounded-circle ganti-model-primary"></div>
            <div class="garis garis-dua align-self-center garis-secondary"></div>
            <div class="mt-3 mt-md-0 bentuk bentuk-dua bentuk-dasar dua rounded-circle ganti-model-primary"></div>
            <div class="garis garis-tiga align-self-center garis-primary"></div>
            <div class="mt-3 mt-md-0 bentuk bentuk-tiga bentuk-dasar tiga rounded-circle ganti-model-secondary"></div>
            <div class="garis garis-empat align-self-center garis-primary"></div>
            <div class="mt-3 mt-md-0 bentuk bentuk-empat bentuk-dasar empat rounded-circle ganti-model-secondary"></div>
            <div class="garis garis-lima align-self-center garis-primary"></div>
            <button disabled class="bg-color-primary text-uppercase text-decoration-none fw-bold text-center text-white py-2 px-4 rounded-pill fs-5 flex-fill ms-0 ms-md-4 mt-3 mt-md-0">selanjutnya</button>
          </div>

          <div class="row mt-5">
            <h1 class="fs-3 fw-bolder text-uppercase text-center text-color-secondary mb-3 mb-md-5">fungsi</h1>
          </div>

          <div name="furnitures" class="row">
            @foreach($fungsi as $item)
            <div class="col-12 col-md-4">
              <a href="{{ route('pUsia', ['fungsiid' => $item->id]) }}" class="bg-image hover-overlay">
                <div class="card card-furniture">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img src="{{ asset($item->foto) }}" height="350" width="100%" style="object-fit: cover" />
                    <div class="mask" style="background: rgba(0, 0, 0, 0.1); border-radius: 7px"></div>
                  </div>
                </div>
              </a>
              <h1 class="fs-3 mt-3 mb-5 mb-md-0 fw-bold text-uppercase text-color-primary text-center">{{ $item->nama_kategori_fungsi }}</h1>
            </div>
            @endforeach
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
</div>
@endsection