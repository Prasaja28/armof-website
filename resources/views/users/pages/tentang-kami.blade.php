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
            {{$dataTentang->deskripsi}}
          </p>
          @endforeach
          @endif

          <div class="logo-tentang d-flex justify-content-center">
            <img src="{{ asset('assets/images/logo.png') }}" />
          </div>

          <p class="fs-5 text-color-primary mt-5">Informasi lebih lanjut:</p>
          @if (!empty(getSettings('url_instagram')))
          <div class="d-flex align-items-end">
            <a href="{{ getSettings('url_instagram') }}">
              <img src="assets/images/instagram.png" height="35" />
            </a>
            <h1 class="fs-5 text-color-primary ms-3">@armof.id</h1>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection