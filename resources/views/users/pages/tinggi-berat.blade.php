@extends('users.components.master')
@section('title', 'Tinggi Berat')
@section('content')
<div class="container">
    <div class="row">
      <div class="col col-12">
        <div class="card mt-4 py-3 px-3 px-md-5">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
              <a href="usia.html" class="bg-color-primary text-uppercase text-decoration-none fw-bold text-center text-white py-2 px-4 rounded-pill fs-5 flex-fill me-0 me-md-4">sebelumnya</a>
              <div class="garis garis-satu align-self-center garis-secondary"></div>
              <div class="bentuk bentuk-satu bentuk-dasar satu rounded-circle ganti-model-primary"></div>
              <div class="garis garis-dua align-self-center garis-secondary"></div>
              <div class="mt-3 mt-md-0 bentuk bentuk-dua bentuk-dasar dua rounded-circle ganti-model-primary"></div>
              <div class="garis garis-tiga align-self-center garis-secondary"></div>
              <div class="mt-3 mt-md-0 bentuk bentuk-tiga bentuk-dasar tiga rounded-circle ganti-model-primary"></div>
              <div class="garis garis-empat align-self-center garis-secondary"></div>
              <div class="mt-3 mt-md-0 bentuk bentuk-empat bentuk-dasar empat rounded-circle ganti-model-primary"></div>
              <div class="garis garis-lima align-self-center garis-secondary"></div>
              <a href="rekomendasi.html" class="bg-color-secondary text-uppercase text-decoration-none fw-bold text-center text-white py-2 px-4 rounded-pill fs-5 flex-fill ms-0 ms-md-4 mt-3 mt-md-0">selesai</a>
            </div>

            <div class="row mt-5">
              <h1 class="fs-3 fw-bolder text-uppercase text-center text-color-secondary mb-3 mb-md-5">tinggi & berat</h1>
            </div>

            <div name="furnitures" class="row">
              <div class="col-12 col-md-4">
                <div class="card card-furniture border-color-primary">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img src="assets/images/kursi.png" height="350" />
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 mt-4 mt-md-0">
                <div class="card card-furniture border-color-primary">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img src="assets/images/kursi.png" height="350" />
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <label class="text-uppercase text-color-primary fw-bold mt-3 mt-md-0">tinggi</label>
                <input type="number" class="form-control" />
                <label class="text-uppercase text-color-primary fw-bold mt-3 mt-md-3">berat</label>
                <input type="number" class="form-control" />
              </div>
            </div>
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