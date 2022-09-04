@extends('users.components.master')
@section('title', 'Tentang Kami')
@section('content')
<div class="container">
  <div class="row">
    <div class="col col-12">
      <div class="card mt-4 py-3 px-3 px-md-5">
        <div class="card-body">
          <h1 class="text-uppercase text-color-primary mb-5 fw-bold">tentang perusahaan</h1>
          @if ($tentang->count() != 0)
          @foreach ($tentang as $dataTentang)
          <p class="fs-4">
            <!-- ARMOF atau kepanjangan dari Augmented Reality Modelling Of Furniture yaitu aplikasi berbasis website yang dirilis pada tahun 2022. Seperti namanya, ARMOF bergerak dibidang model mebel yang digabungkan dengan AR (Augmented
              Reality). ARMOF dirancang oleh 5 mahasiswa dari Universitas Negeri Manado. <br /><br />
              ARMOF adalah aplikasi berbasis web terbuka yang bisa diakses oleh semua pengguna, memudahkan pengguna melihat rekomendasi mebel yang digunakan sesuai kebutuhannya dengan menggunakan perhitungan antropometri 36 dimensi. -->
            {{$dataTentang->deskripsi}}
          </p>
          @endforeach
          @endif

          <div class="logo-tentang d-flex justify-content-center">
            <img src="assets/images/logo.PNG" />
          </div>

          <p class="fs-5 text-color-primary mt-5">Informasi lebih lanjut:</p>
          @if (!empty(getSettings('url_instagram')))
          <div class="d-flex align-items-end">
            <a href="{{ getSettings('url_instagram') }}">
              <img src="assets/images/instagram.png" height="35" />
              <h1 class="fs-5 text-color-primary ms-3">@armof.id</h1>
            </a>
          </div>
          @endif
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