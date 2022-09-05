@extends('users.components.master')
@section('title', 'Selamat datang di Armof!')
@section('content')
<div class="container">
  <div class="row">
    <div class="col col-12">
      <div class="card mt-4 py-3 px-3 px-md-5">
        <div class="card-body">
          <h1 class="text-uppercase text-color-primary mb-5 fw-bold">selamat datang di website armof</h1>
          <p class="fs-4">
            ARMOF bertujuan untuk memberikan simulasi ukuran furniture yang sesuai dengan data antropometri yang dimasukan oleh pengguna. Rekomendasi diberikan sesuai dengan data yang diberikan pengguna berkaitan dengan jenis furniture
            (meja, kursi, lemari), antropometri (tinggi badan, berat badan) dan jenis aktivitas (belajar, bersantai, mengobrol).<br /><br />
            Simulasi yang akan diberikan berupa 3D Modeling serta bentu Augmented Reality dari furniture yang diiginkan. Simulasi tersebut dapat digunakan oleh pengguna sebagai rekomendasi atau acuan yang dapat mereka gunakan untuk
            membuat atau meminta secara custom desain kepada penyedia jasa furniture. Selain itu desain ini juga dapat dijadikan sebagai acuan bagi penyedia jasa dalam merancang ukuran dari suatu furniture agar dapat memberikan
            kenyamanan kepada penggunannya.
          </p>

          <div class="row justify-content-center">
            <div class="col-8 col-md-3">
              <a href="/furnitures" class="bg-color-primary text-uppercase text-decoration-none fw-bold text-center text-white mt-5 mb-3 m-auto d-block py-3 fs-5">mulai sekarang</a>
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
</div>
@endsection